<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation', 'session');
		$this->load->model('KriteriaModel');
		$this->load->model('NilaiModel');
		$this->load->model('WargaModel');
		//validasi jika user belum login
		if ($this->session->userdata('cek_login') != TRUE) {
			redirect('auth', 'refresh');
		}
	}

	public function detail_nilai($id_nilai)
	{
		$data['url'] = 'Nilai';
		$data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();
		$data['nilai'] = $this->NilaiModel->get_detail_nilai($id_nilai);

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('nilai/detail', $data);
		$this->load->view('templates/footer');
	}

	public function index()
	{
		$data['url'] = 'Nilai';
		$data['nilai'] = $this->NilaiModel->get_data_warga_from_nilai();
		$data['data_warga'] = $this->NilaiModel->get_data_warga();

		$data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('nilai/index', $data);
		$this->load->view('templates/footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('fk_id_warga', 'ID / Nama Warga', 'trim|required');
		$this->form_validation->set_rules('kriteria1', 'Kriteria 1', 'trim|required');
		$this->form_validation->set_rules('kriteria2', 'Kriteria 2', 'trim|required');
		$this->form_validation->set_rules('kriteria3', 'Kriteria 3', 'trim|required');
		$this->form_validation->set_rules('kriteria4', 'Kriteria 4', 'trim|required');
		$this->form_validation->set_rules('kriteria5', 'Kriteria 5', 'trim|required');
		$this->form_validation->set_rules('kriteria6', 'Kriteria 6', 'trim|required');
		$this->form_validation->set_rules('kriteria7', 'Kriteria 7', 'trim|required');
		$this->form_validation->set_rules('kriteria8', 'Kriteria 8', 'trim|required');
		$this->form_validation->set_rules('kriteria9', 'Kriteria 9', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['url'] = 'Nilai';
			$data['data_warga'] = $this->WargaModel->get_all();
			$data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('nilai/insert', $data);
			$this->load->view('templates/footer');
		} else {
			for ($i = 1; $i <= 9; $i++) {
				$value = 'kriteria' . $i;
				$data = [
					'fk_id_warga' => $this->input->post('fk_id_warga'),
					'fk_id_kriteria' => $i,
					'total_nilai' => $this->input->post($value),
				];
				$this->NilaiModel->insert_nilai($data);
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sukses, data gagal <b>ditambahkan</b>!</div>');
			}
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses, data berhasil <b>ditambahkan</b>!</div>');
			redirect('nilai', 'refresh');
		}
	}

	public function update($id)
	{
		$this->form_validation->set_rules('fk_id_alternatif', 'Nama Alternatif', 'trim|required');
		$this->form_validation->set_rules('kriteria1', 'Kriteria 1', 'trim|required');
		$this->form_validation->set_rules('kriteria2', 'Kriteria 2', 'trim|required');
		$this->form_validation->set_rules('kriteria3', 'Kriteria 3', 'trim|required');
		$this->form_validation->set_rules('kriteria4', 'Kriteria 4', 'trim|required');
		$this->form_validation->set_rules('kriteria5', 'Kriteria 5', 'trim|required');
		$this->form_validation->set_rules('kriteria6', 'Kriteria 6', 'trim|required');
		$this->form_validation->set_rules('kriteria7', 'Kriteria 7', 'trim|required');
		$this->form_validation->set_rules('kriteria8', 'Kriteria 8', 'trim|required');
		$this->form_validation->set_rules('kriteria9', 'Kriteria 9', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['url'] = 'Nilai';
			$data['nilai'] = $this->NilaiModel->get_nilai_by_id($id);
			$data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('nilai/update', $data);
			$this->load->view('templates/footer');
		} else {
			$this->NilaiModel->update_nilai($id);
			redirect('nilai', 'refresh');
		}
	}

	public function delete($id)
	{
		$this->NilaiModel->delete_nilai($id);
		redirect('nilai', 'refresh');
	}

	public function delete_alternatif($id)
	{
		$this->NilaiModel->delete_nilai_by_alternatif($id);
		redirect('nilai', 'refresh');
	}
}
