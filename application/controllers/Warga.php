<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Warga extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->load->view('templates/header.php');
        $this->load->view('templates/sidebar.php');
        $this->load->view('templates/navbar.php');
        $this->load->view('warga.php');
        $this->load->view('templates/footer.php');
	}
}
