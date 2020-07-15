<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warga extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation', 'session');
        $this->load->model('WargaModel');
    }

	public function index()
	{
        $data['url'] = 'Warga';
		$data['data_warga'] = $this->WargaModel->get_all_warga();

        $data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();
        
		$this->load->view('templates/header');
		$this->load->view('templates/topbar');
		$this->load->view('warga/index');
		$this->load->view('templates/footer');
	}
}
