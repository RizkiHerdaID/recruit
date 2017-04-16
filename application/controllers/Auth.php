<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

Class Auth extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_m', 'user');
        $this->load->library('form_validation');
    }

    function index()
    {
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        }
        $this->load->helper(array('form'));
        $this->load->view('login');
    }

    public function verifyLogin()
    {
        // Login dengan username dan password lalu cek ke database
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        // Tambahkan Style di pesan Error
        $this->form_validation->set_error_delimiters('<div class="text text-primary">', '</div>');
        if($this->form_validation->run() == FALSE)
        {
            // Kembalikan ke Halaman Login dan tampilkan pesan error
            $this->load->view('login');
        }
        else {
            // Cek Ke database Username dan Password yang diberikan
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $result = $this->user->login($username, $password);
            // Jika berhasil simpan ID dan username ke Session.
            if ($result) {
                foreach ($result as $row) {
                    $session = array(
                        'id' => $row->id,
                        'username' => $row->username,
                    );
                    $this->session->set_userdata('logged_in', $session);
                }
                redirect('dashboard');
            // Jika tidak redirect ke halaman login (Auth) dengan pesan error
            } else {
                $this->session->set_flashdata('login', '<div class="text text-primary">Invalid username or password</div><br/>');
                redirect('auth');
            }
        }
    }

    function logout()
    {
        // Hapus semua session dan redirect ke halaman login
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('auth');
    }
}