<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('AlternatifModel');
		$this->load->model('KriteriaModel');
		$this->load->model('NilaiModel');
	}

	public function index()
	{
		$data['data'] = $this->AlternatifModel->get_all_alternatif();
		$data['data'] = $this->NilaiModel->get_alternatif_nilai();

		$data['url'] = 'Nilai';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('nilai/index', $data);
		$this->load->view('templates/footer');
	}

	public function detail()
	{

	}

	public function insert()
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
			$data['alternatif'] = $this->AlternatifModel->get_all_alternatif();
			$data['url'] = 'Nilai';

			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('nilai/insert', $data);
			$this->load->view('templates/footer');
		} else {
			for ($i = 1; $i <= 9; $i++) {
				$value = 'kriteria' . $i;
				$data = [
					'fk_id_alternatif' => $this->input->post('fk_id_alternatif'),
					'fk_id_kriteria' => $i,
					'total_nilai' => $this->input->post($value),
				];
				$this->NilaiModel->insert_nilai($data);
			}

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
			$data['data'] = $this->NilaiModel->get_all_nilai();

			$data['url'] = 'Nilai';

			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('templates/sidebar', $data);
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
}