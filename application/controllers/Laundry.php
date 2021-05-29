<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laundry extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_Transaksi');
        $this->load->model('Model_Paket');
        $this->load->model('Model_search');
    }



    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pelanggan'] = $this->db->get('pelanggan')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        $this->form_validation->set_rules('tlp', 'tlp', 'required');

        if($this->form_validation->run() == false ){
            $data['title'] = 'Dashboard Pelanggan';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('laundry/index', $data);
            $this->load->view('templates/footer');
        }else{
            // masukin Data 

            $data = [

                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tlp' => $this->input->post('tlp'),
            ];
            $this->db->insert('pelanggan',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Telah Di Tambahkan</div>');
            redirect('laundry');
        }

    }
    public function edit_pelanggan($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['pelanggan'] = $this->db->get_where('pelanggan', ['id' => $id])->row_array();
        $this->form_validation->set_rules('nama','Nama','required|trim');
        $this->form_validation->set_rules('alamat','Alamat Pelanggan','required|trim');
        $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required|trim');
        $this->form_validation->set_rules('tlp','Telpon','required|trim');

        if($this->form_validation->run() == false){

            $data['title'] = 'Dashboard paket';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('laundry/edit_pelanggan', $data);
            $this->load->view('templates/footer');
        }else{

            $data = [

                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tlp' => $this->input->post('tlp'),


            ];
            $this->db->where('id', $id);
            $this->db->update('pelanggan',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pelanggan Telah Di Edit</div>');
            redirect('laundry');
        }
    }

    public function pelanggan_update($id)
    {
        $data = [

            'nama' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'tlp' => $this->input->post('tlp')

        ];
        $this->db->where('id', $id);
        $this->db->update('pelanggan',$data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pelanggan Telah Di Edit</div>');
        redirect('laundry');
    }


    public function hapusDataPelanggan($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('pelanggan');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Telah Di Hapus</div>');
        redirect('laundry');
    }




    public function paket()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['paket'] = $this->db->get('tb_paket')->result_array();
        $this->form_validation->set_rules('jenis','Jenis','required|trim');
        $this->form_validation->set_rules('nama_paket','Nama_Paket','required|trim');
        $this->form_validation->set_rules('harga','Harga','required|trim');
        if($this->form_validation->run() == false){

            $data['title'] = 'Dashboard paket';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('laundry/paket', $data);
            $this->load->view('templates/footer');
        }else{

            // masukin Data
            $data = [

                'jenis' => $this->input->post('jenis'),
                'nama_paket' => $this->input->post('nama_paket'),
                'harga' => $this->input->post('harga')
            ];
            $this->db->insert('tb_paket',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Paket Telah Di Tambahkan</div>');
            redirect('laundry/paket');
        }
    }




    public function hapusDataPaket($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tb_paket');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Paket Telah Di Hapus</div>');
        redirect('laundry/paket');
    }



    public function edit_paket($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['paket'] = $this->db->get_where('tb_paket', ['id' => $id])->row_array();
        $this->form_validation->set_rules('jenis','Jenis Paket','required|trim');
        $this->form_validation->set_rules('nama_paket','Nama Paket','required|trim');
        $this->form_validation->set_rules('harga','Harga','required|trim');

        if($this->form_validation->run() == false){

            $data['title'] = 'Dashboard paket';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('laundry/edit_paket', $data);
            $this->load->view('templates/footer');
        }else{

            $data = [

                'jenis' => $this->input->post('jenis'),
                'nama_paket' => $this->input->post('nama_paket'),
                'harga' => $this->input->post('harga')

            ];
            $this->db->where('id', $id);
            $this->db->update('tb_paket',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Paket Telah Di Edit</div>');
            redirect('laundry/paket');
        }
    }

    public function paket_update($id)
    {
        $data = [

            'jenis' => $this->input->post('jenis'),
            'nama_paket' => $this->input->post('nama_paket'),
            'harga' => $this->input->post('harga')

        ];
        $this->db->where('id', $id);
        $this->db->update('tb_paket',$data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Paket Telah Di Edit</div>');
        redirect('laundry/paket');
    }


    public function transaksi()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['transaksi'] = $this->db->get('tb_transaksi')->result_array();
        $data['pelanggan'] = $this->db->get('pelanggan')->result_array();
        $data['paket'] = $this->db->get('tb_paket')->result_array();
        $data['otlet'] = $this->db->get('tb_otlet')->result_array();
        $data['userr'] = $this->db->get('user')->result_array();


        // $this->form_validation->set_rules('nama_otlet','Nama_otlet','required|trim');
        // $this->form_validation->set_rules('nama_pelanggan','Nama_pelanggan','required|trim');
        // $this->form_validation->set_rules('tgl','Tanggal','required|trim');
        // $this->form_validation->set_rules('batas_waktu','Batas_waktu','required|trim');
        // $this->form_validation->set_rules('jml_kilo','jumlah_kilo','required|trim');
        // $this->form_validation->set_rules('total','total','required|trim');
        // $this->form_validation->set_rules('tgl_bayar','tgl_bayar','required|trim');
        // $this->form_validation->set_rules('dibayar','dibayar','required|trim');
        // $this->form_validation->set_rules('nama_penginput','nama_penginput','required|trim');
        if($this->form_validation->run() == false){

            $data['title'] = 'Dashboard Transaksi';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('laundry/transaksi', $data);
            $this->load->view('templates/footer');
        }else{
             // masukin Data
            $data = [
                'nama_otlet' => $this->input->post('nama_otlet'),
                'nama_pelanggan' => $this->input->post('nama_pelanggan'),
                'tgl' => $this->input->post('tgl'),
                'batas_waktu' => $this->input->post('batas_waktu'),
                'nama_paket' => $this->input->post('nama_paket'),
                'jml_kilo' => $this->input->post('jml_kilo'),
                'harga' => $this->input->post('harga'),
                'total' => $this->input->post('total'),
                'tgl_bayar' => $this->input->post('tgl_bayar'),
                'dibayar' => $this->input->post('dibayar'),
                
            ];
            $this->db->insert('tb_transaksi',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Transaksi Telah Di Tambahkan</div>');
            redirect('laundry/transaksi');
        }
    }




    public function transaksi_post()
    {
        $this->form_validation->set_rules('nama_otlet','Nama_otlet','required|trim');
        $this->form_validation->set_rules('nama_pelanggan','Nama_pelanggan','required|trim');
        $this->form_validation->set_rules('tgl','Tanggal','required|trim');
        $this->form_validation->set_rules('batas_waktu','Batas_waktu','required|trim');
        $this->form_validation->set_rules('jml_kilo','jumlah_kilo','required|trim');
        $this->form_validation->set_rules('total','total','required|trim');
        $this->form_validation->set_rules('tgl_bayar','tgl_bayar','required|trim');
        $this->form_validation->set_rules('dibayar','dibayar','required|trim');
        $this->form_validation->set_rules('nama_penginput','nama_penginput','required|trim');
        $data = [
            'nama_otlet' => $this->input->post('nama_otlet'),
            'nama_pelanggan' => $this->input->post('nama_pelanggan'),
            'tgl' => $this->input->post('tgl'),
            'batas_waktu' => $this->input->post('batas_waktu'),
            'nama_paket' => $this->input->post('nama_paket'),
            'jml_kilo' => $this->input->post('jml_kilo'),
            'harga' => $this->input->post('harga'),
            'total' => $this->input->post('total'),
            'tgl_bayar' => $this->input->post('tgl_bayar'),
            'dibayar' => $this->input->post('dibayar'),
            'nama_penginput' => $this->input->post('nama_penginput'),
        ];
        $this->db->insert('tb_transaksi',$data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Transaksi Telah Di Tambahkan</div>');
        redirect('laundry/transaksi');
    }
    public function hapusDataTransaksi($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('tb_transaksi');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Telah Di Hapus</div>');
        redirect('laundry/transaksi');
    }
    public function cetak_transaksi($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->db->get_where('tb_transaksi', ['id' => $id])->row_array();
        $this->form_validation->set_rules('nama','Nama','required|trim');
        $this->form_validation->set_rules('alamat','Alamat Pelanggan','required|trim');
        $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required|trim');
        $this->form_validation->set_rules('tlp','Telpon','required|trim');

        if($this->form_validation->run() == false){

            $data['title'] = 'Dashboard cetak Transaksi';
            $this->load->view('laundry/cetak_transaksi', $data);

        }else{

            $data = [

                'nama_pelanggan' => $this->input->post('nama_pelanggan'),
                'tgl' => $this->input->post('tgl'),
                'batas_waktu' => $this->input->post('batas_waktu'),
                'tlp' => $this->input->post('tlp'),
                'batas_waktu' => $this->input->post('batas_waktu'),
                'nama_paket' => $this->input->post('nama_paket'),
                'harga' => $this->input->post('harga'),
                'total' => $this->input->post('total'),
                'tgl_bayar' => $this->input->post('tgl_bayar'),
                'dibayar' => $this->input->post('dibayar'),
                'nama_penginput' => $this->input->post('nama_penginput'),


            ];
            $this->db->where('id', $id);
            $this->db->update('tb_transaksi',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pelanggan Telah Di Edit</div>');
            redirect('laundry/transaksi');
        }
    }
    public function search_transaksi()
    {

        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->db->get('tb_transaksi')->result_array();
        $data['pelanggan'] = $this->db->get('pelanggan')->result_array();
        $data['paket'] = $this->db->get('tb_paket')->result_array();
        $data['otlet'] = $this->db->get('tb_otlet')->result_array();
        $data['userr'] = $this->db->get('user')->result_array();
        
        $keyword = $this->input->post('keyword');
        $data['search_transaksi'] = $this->Model_search->get_keyword($keyword);

        $data['title'] = 'Dashboard Transaksi';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laundry/search_transaksi', $data);
        $this->load->view('templates/footer');

    }






    public function otlet()
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['otlet'] = $this->db->get('tb_otlet')->result_array();
        if($this->form_validation->run() == false){

            // $this->form_validation->set_rules('nama_otlet','Nama_Outlet','required|trim');
            // $this->form_validation->set_rules('alamat','alamat','required|trim');
            // $this->form_validation->set_rules('tlp','tlp','required|trim');
            $data['title'] = 'Dashboard Outlet';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('laundry/otlet', $data);
            $this->load->view('templates/footer');
        }else{

            $data = [

                'nama_otlet' => $this->input->post('nama_otlet'),
                'alamat' => $this->input->post('alamat'),
                'tlp' => $this->input->post('tlp')

            ];
            $this->db->insert('tb_otlet',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Outlet Telah Di Tambahkan</div>');
            redirect('laundry/otlet');
        }
    }



    public function otlet_post()
    {
      $this->form_validation->set_rules('nama_otlet','Nama_Outlet','required|trim');
      $this->form_validation->set_rules('alamat','alamat','required|trim');
      $this->form_validation->set_rules('tlp','tlp','required|trim');
      $data = [

        'nama_otlet' => $this->input->post('nama_otlet'),
        'alamat' => $this->input->post('alamat'),
        'tlp' => $this->input->post('tlp')

    ];
    $this->db->insert('tb_otlet',$data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Outlet Telah Di Tambahkan</div>');
    redirect('laundry/otlet');
}

public function edit_otlet($id)
{
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['otlet'] = $this->db->get_where('tb_otlet', ['id' => $id])->row_array();
    $this->form_validation->set_rules('nama_otlet','Nama Outlet','required|trim');
    $this->form_validation->set_rules('alamat','alamat','required|trim');
    $this->form_validation->set_rules('tlp','Telp','required|trim');

    if($this->form_validation->run() == false){

        $data['title'] = 'Dashboard paket';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laundry/edit_otlet', $data);
        $this->load->view('templates/footer');
    }else{

        $data = [

            'nama_paket' => $this->input->post('nama_otlet'),
            'alamat' => $this->input->post('alamat'),
            'tlp' => $this->input->post('tlp')

        ];
        $this->db->where('id', $id);
        $this->db->update('tb_otlet',$data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Outlet Telah Di Edit</div>');
        redirect('laundry/otlet');
    }
}

public function otlet_update($id)
{
    $data = [

        'nama_otlet' => $this->input->post('nama_otlet'),
        'alamat' => $this->input->post('alamat'),
        'tlp' => $this->input->post('tlp')

    ];
    $this->db->where('id', $id);
    $this->db->update('tb_otlet',$data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Outlet Telah Di Edit</div>');
    redirect('laundry/otlet');
}
public function hapusDataOtlet($id)
{
    $this->db->where('id',$id);
    $this->db->delete('tb_otlet');
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Telah Di Hapus</div>');
    redirect('laundry/otlet');
}

}