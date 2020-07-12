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
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/auth-header');
			$this->load->view('auth-login');
			$this->load->view('templates/auth-footer');
		} else {
			redirect('Dashboard', 'refresh');
		}
	}

	public function session_login()
	{
		$username = htmlspecialchars($this->input->post('username', true), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password', true), ENT_QUOTES);

		$cek_user = $this->AuthModel->auth_login($username, $password);

		if ($cek_user->num_rows() > 0) {
			$data = $cek_user->row_array();
			$this->session->set_userdata('cek_login', true);
			if ($data['fk_id_level'] == '1') {
				$this->session->set_userdata('fk_id_level', '1');
				$this->session->set_userdata('nama_lengkap', $data['nama_lengkap']);
				$this->session->set_userdata('username', $data['username']);
				redirect('Dashboard', 'refresh');
			} else {
				$this->session->set_userdata('fk_id_level', '2');
				$this->session->set_userdata('nama_lengkap', $data['nama_lengkap']);
				$this->session->set_userdata('username', $data['username']);
				redirect('Dashboard', 'refresh');
			}
		} else {
			echo $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Maaf, password anda salah!</div>');
		}
		redirect('Auth', 'refresh');
	}


	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->unset_userdata('username');
		redirect('Auth', 'refresh');
	}
}
