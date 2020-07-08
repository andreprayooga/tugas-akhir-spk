<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metode extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('AlternatifModel');
		$this->load->model('KriteriaModel');
		$this->load->model('NilaiModel');	
		$this->load->model('MetodeModel');
	}

	public function index()
	{
		$data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap	')])->row_array();
		$data['url'] = 'Metode';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('metode/index');
		$this->load->view('templates/footer');
	}
}
