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
        
        $this->load->view('templates/header.php', $data);
		$this->load->view('templates/navbar.php', $data);
		$this->load->view('templates/sidebar.php', $data);
        $this->load->view('metode_perhitungan.php');
        $this->load->view('templates/footer.php');
	}
}
