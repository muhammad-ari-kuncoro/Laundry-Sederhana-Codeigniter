    <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Admin extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            is_logged_in();
        }

        public function index()
        {
            $data['title'] = 'Dashboard';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/index', $data);
            $this->load->view('templates/footer');
        }


        public function role()
        {
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['role'] = $this->db->get('user_role')->result_array();

            $this->form_validation->set_rules('role','Role','required');
            if($this->form_validation->run() == false){

                $data['title'] = 'Role';
                $this->load->view('templates/header', $data);
                $this->load->view('templates/sidebar', $data);
                $this->load->view('templates/topbar', $data);
                $this->load->view('admin/role', $data);
                $this->load->view('templates/footer');
            }else{
             $data = [
                'role' =>$this->input->post('role'),

            ];
            $this->db->insert('user_role',$data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Telah Di Ubah!</div>');
            redirect('admin/role');


        }
    }
    public function editRole($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['user_role'] = $this->db->get_where('user_role', ['id' => $id])->row_array();

        $this->form_validation->set_rules('role','Role','required');
        if($this->form_validation->run() == false){

            $data['title'] = 'Role';
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/edit_role', $data);
            $this->load->view('templates/footer');
        }else{
         $data = [
            'role' =>$this->input->post('role'),

        ];
        $this->db->insert('user_role',$data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"> Data Telah Di Ubah!</div>');
        redirect('admin/role');


    }
}
public function role_update($id)
{
    $data = [

       'role' => $this->input->post('role'),
       

   ];
   $this->db->where('id', $id);
   $this->db->update('user_role',$data);
   $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Telah Di Edit</div>');
   redirect('admin/role');
}

public function hapusRole($id)
{
    $this->db->where('id',$id);
    $this->db->delete('user_role');
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Telah Di Hapus</div>');
    redirect('admin/role');
}


public function roleAccess($role_id)
{
    $data['title'] = 'Role Access';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

    $this->db->where('id !=', 1);
    $data['menu'] = $this->db->get('user_menu')->result_array();

    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('admin/role-access', $data);
    $this->load->view('templates/footer');
}


public function changeAccess()
{
    $menu_id = $this->input->post('menuId');
    $role_id = $this->input->post('roleId');

    $data = [
        'role_id' => $role_id,
        'menu_id' => $menu_id
    ];

    $result = $this->db->get_where('user_access_menu', $data);

    if ($result->num_rows() < 1) {
        $this->db->insert('user_access_menu', $data);
    } else {
        $this->db->delete('user_access_menu', $data);
    }

    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
}
public function tambah_user()
{

    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['userr'] = $this->db->get('user')->result_array();
    $this->form_validation->set_rules('name', 'Name', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
        'is_unique' => 'This email has already registered!'
    ]);
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
        'matches' => 'Password dont match!',
        'min_length' => 'Password too short!'
    ]);
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
    $this->form_validation->set_rules('role_id', 'Role Id', 'required|trim');
    if ($this->form_validation->run() == false) {
        $data['title'] = 'Tambah User';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/tambah_user', $data);
        $this->load->view('templates/footer');
    } else {
        $email = $this->input->post('email', true);
        $data = [
            'name' => htmlspecialchars($this->input->post('name', true)),
            'email' => htmlspecialchars($email),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => htmlspecialchars($this->input->post('role_id'), true),
            'is_active' => 1,
            'date_created' => time()
        ];
        $this->db->insert('user', $data);

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Akun Sudah Di tambahkan</div>');
        redirect('admin/tambah_user');
    }
}

public function edit_user($id)
{
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['userr'] = $this->db->get_where('user', ['id' => $id])->row_array();

    $this->form_validation->set_rules('name','Name','required|trim');
    $this->form_validation->set_rules('email','email','required|trim');
    $this->form_validation->set_rules('role_id','Role Id','required|trim');
    if($this->form_validation->run() == false){

        $data['title'] = 'Dashboard Edit User';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit_user', $data);
        $this->load->view('templates/footer');
    }else{

        $data = [

           'name' => $this->input->post('name'),
           'email' => $this->input->post('email'),
           'role_id' => $this->input->post('role_id'),

       ];
       $this->db->where('id', $id);
       $this->db->update('user',$data);
       $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Telah Di Edit</div>');
       redirect('admin/tambah_user');
   }
}

public function user_update($id)
{
    $data = [

       'name' => $this->input->post('name'),
       'email' => $this->input->post('email'),
       'role_id' => $this->input->post('role_id')

   ];
   $this->db->where('id', $id);
   $this->db->update('user',$data);
   $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data User Telah Di Edit</div>');
   redirect('admin/tambah_user');
}


public function hapus_user($id)
{
    $this->db->where('id',$id);
    $this->db->delete('user');
    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Telah Di Hapus</div>');
    redirect('admin/tambah_user');
}
}
