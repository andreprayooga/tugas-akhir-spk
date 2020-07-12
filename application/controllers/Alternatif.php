<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('AlternatifModel');
		//validasi jika user belum login
		if ($this->session->userdata('cek_login') != TRUE) {
			redirect('auth', 'refresh');
		}
	}

	public function index()
	{
		$data['url'] = 'Alternatif';
		$data['data_alternatif'] = $this->AlternatifModel->get_all_alternatif();

		$data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('alternatif/index', $data);
		$this->load->view('templates/footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('kode_alternatif', 'Kode Alternatif', 'trim|required');
		$this->form_validation->set_rules('nama_alternatif', 'Nama Alternatif', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();
			$data['url'] = 'Alternatif';

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('alternatif/insert');
			$this->load->view('templates/footer');
		} else {
			$this->AlternatifModel->insert_data();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, data berhasil ditambahkan!</div>');
			redirect('alternatif');
		}
	}

	public function update($id_alternatif)
	{
		$this->form_validation->set_rules('kode_alternatif', 'Kode Alternatif', 'trim|required');
		$this->form_validation->set_rules('nama_alternatif', 'Nama Alternatif', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['url'] = 'alternatif';

			$data['data'] = $this->AlternatifModel->get_all_alternatif();
			$data['data'] = $this->AlternatifModel->get_alternatif_by_id($id_alternatif);
			$data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('alternatif/update', $data);
			$this->load->view('templates/footer');
		} else {
			$this->AlternatifModel->update_data($id_alternatif);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, data berhasil di update!</div>');
			redirect('alternatif');
		}
	}

	public function delete($id_alternatif)
	{
		$this->AlternatifModel->delete_data($id_alternatif);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sukses, data berhasil dihapus!</div>');
		redirect('alternatif');
	}

	public function index_warga()
	{
		$data['url'] = 'Warga';
		$data['data_warga'] = $this->AlternatifModel->get_all_warga();

		$data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('alternatif/index_warga', $data);
		$this->load->view('templates/footer');
	}
}
