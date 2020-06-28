<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kriteria extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $data['url'] = 'Kriteria';
        
        $this->load->view('templates/header.php', $data);
		$this->load->view('templates/navbar.php', $data);
		$this->load->view('templates/sidebar.php', $data);
        $this->load->view('kriteria.php');
        $this->load->view('templates/footer.php');
	}
}
