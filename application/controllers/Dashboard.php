<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['url'] = 'Dashboard';

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/navbar.php', $data);
		$this->load->view('templates/sidebar.php', $data);
        $this->load->view('index.php');
        $this->load->view('templates/footer.php');
	}
}
