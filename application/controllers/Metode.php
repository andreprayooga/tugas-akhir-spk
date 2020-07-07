<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Metode extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['url'] = 'Metode';

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('metode/index');
		$this->load->view('templates/footer');
	}
}
