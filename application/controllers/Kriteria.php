<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('KriteriaModel');
	}

	public function index()
	{
		$data['url'] = 'Kriteria';
		$data['data'] = $this->KriteriaModel->get_all_kriteria();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('kriteria/index', $data);
		$this->load->view('templates/footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('nama_kriteria', 'Nama Kriteria', 'trim|required');
		$this->form_validation->set_rules('tipe', 'Tipe Kriteria', 'trim|required');
		$this->form_validation->set_rules('bobot', 'Bobot Kriteria', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['url'] = 'Kriteria';

			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('templates/sidebar', $data);	
			$this->load->view('kriteria/insert', $data);
			$this->load->view('templates/footer');
		} else {
			$this->KriteriaModel->insert_data();
			redirect('kriteria');
		}
	}

	public function update($id)
	{
		$this->form_validation->set_rules('nama_kriteria', 'Nama Kriteria', 'trim|required');
		$this->form_validation->set_rules('tipe', 'Tipe Kriteria', 'trim|required');
		$this->form_validation->set_rules('bobot', 'Bobot Kriteria', 'trim|required');

		if ($this->form_validation->run() == false) {
			$data['url'] = 'Kriteria';

			$data['data'] = $this->KriteriaModel->get_all_kriteria();
			$data['data'] = $this->KriteriaModel->get_id($id);

			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('kriteria/update', $data);
			$this->load->view('templates/footer');
		} else {
			$this->KriteriaModel->update_data($id);
			redirect('kriteria');
		}
	}

	public function delete($id)
	{
		$this->KriteriaModel->delete_data($id);
		redirect('kriteria');
	}
}
