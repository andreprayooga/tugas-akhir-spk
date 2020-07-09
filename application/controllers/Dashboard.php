<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//validasi jika user belum login
		if($this->session->userdata('cek_login') != TRUE){
            redirect('auth', 'refresh');
        }
	}

	public function index()
	{
		$data['url'] = 'Dashboard';
		$data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}
}
