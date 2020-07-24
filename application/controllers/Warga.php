<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warga extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation', 'session');
		$this->load->model('WargaModel');
		//validasi jika user belum login
		if ($this->session->userdata('cek_login') != TRUE) {
			redirect('auth', 'refresh');
		}
	}

	public function index()
	{
		$data['url'] = 'Warga';
		$data['data_warga'] = $this->WargaModel->get_all();
		$data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('warga/index', $data);
		$this->load->view('templates/footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama_warga', 'Nama Warga', 'trim|required');
		$this->form_validation->set_rules('status_bangunan_tinggal', 'Tipe', 'trim|required');
		$this->form_validation->set_rules('status_lahan_tinggal', 'Tipe', 'trim|required');
		$this->form_validation->set_rules('jenis_lantai_terluas', 'Tipe', 'trim|required');
		$this->form_validation->set_rules('jenis_dinding', 'Tipe', 'trim|required');
		$this->form_validation->set_rules('kondisi_dinding', 'Tipe', 'trim|required');
		$this->form_validation->set_rules('jenis_atap', 'Tipe', 'trim|required');
		$this->form_validation->set_rules('kondisi_atap', 'Tipe', 'trim|required');
		$this->form_validation->set_rules('sumber_air_minum', 'Tipe', 'trim|required');
		$this->form_validation->set_rules('sumber_penerangan', 'Tipe', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['url'] = 'Warga';
			$data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('warga/insert', $data);
			$this->load->view('templates/footer');
		} else {
			$this->WargaModel->insert_warga();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses data berhasil <b>ditambahkan</b>!</div>');
			redirect('warga', 'refresh');
		}
	}
}
