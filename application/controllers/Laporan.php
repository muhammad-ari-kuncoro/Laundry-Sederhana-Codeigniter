<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Model_cetak');
    }

    public function index()
    {
        $data['title'] = 'Dashboard Laporan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->db->get('tb_transaksi')->result_array();

        $data['tahun'] = $this->Model_cetak->gettahun();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
    }
    public function cetak()
    {
        $data['title'] = 'Dashboard Laporan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['transaksi'] = $this->db->get('tb_transaksi')->result_array();

        $this->load->view('laporan/cetak', $data);
    }

    public function filter()
    {
        $tglawal = $this->input->post('tglawal');
        $tglakhir = $this->input->post('tglakhir');
        $tahun1 = $this->input->post('tahun1');
        $bulanawal = $this->input->post('bulanawal');
        $bulanakhir = $this->input->post('bulanakhir');
        $tahun2 = $this->input->post('tahun2');
        $nilaifilter = $this->input->post('nilaifilter');

        if($nilaifilter == 1){

            $data['title'] = 'Laporan Transaksi By Tanggal';
            $data['subtitle'] = 'Dari Tanggal :'.$tglawal.'  Sampai Tanggal : '.$tglakhir;
            $data['datafilter'] = $this->Model_cetak->filterbytanggal($tglawal,$tglakhir);


            $this->load->view('laporan/cetak',$data);

        }else if($nilaifilter == 2){

            $data['title'] = 'Laporan Transaksi By Bulan';
            $data['subtitle'] = 'Dari Bulan :'.$bulanawal.'  Sampai Bulan : '.$bulanakhir.' Tahun : '.$tahun1;
            $data['datafilter'] =$this->Model_cetak->filterbybulan($tahun1,$bulanawal,$bulanakhir);


            $this->load->view('laporan/cetak',$data);


        }else if($nilaifilter == 3){

            $data['title'] = 'Laporan Transaksi By Tahun';
            $data['subtitle'] = ' Tahun : '.$tahun1;
            $data['datafilter'] =$this->Model_cetak->filterbytahun($tahun2);


            $this->load->view('laporan/cetak',$data);
        }


    }
}