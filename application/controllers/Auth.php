<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation', 'session');
        $this->load->model('AuthModel');
    }

    public function index()
    {
        $this->load->view('templates/auth-header.php');
        $this->load->view('auth-login'); // Load view auth-login.php
        $this->load->view('templates/auth-footer.php');
    }

    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth-header.php');
            $this->load->view('auth-login.php');
            $this->load->view('templates/auth-footer.php');
        } else {
            //get username
            $username = $this->input->post('username');
            //get password
            $password = $this->input->post('password');
            //user melakukan login
            $id_user = $this->AuthModel->login('$username', '$password');
            //membuat kondisi dan session
            if($id_user){
                $user_data = array(
                    'id_user' => $id_user,
                    'username' => $username,
                    'password' => $password,
                    'fk_id_level' => $id_user['fk_id_level'],
                );

                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat datang!</div>');

                if($id_user['fk_id_level'] == '1'){
                    redirect('Dashboard');
                } else {
                    redirect('Dashboard', 'refresh');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect('Auth/login');
            }
        }
    }

    public function logout()
    {
        //unset user_data
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
        redirect('Auth');
    }
}
