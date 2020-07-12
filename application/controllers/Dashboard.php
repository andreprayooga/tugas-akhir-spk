<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		$data['url'] = 'Dashboard';
		$data['session_login'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('index');
		$this->load->view('templates/footer');
	}
}
