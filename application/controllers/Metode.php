<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Metode extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('AlternatifModel');
		$this->load->model('KriteriaModel');
		$this->load->model('NilaiModel');
		$this->load->model('MetodeModel');
		//validasi jika user belum login
		if ($this->session->userdata('cek_login') != TRUE) {
			redirect('auth', 'refresh');
		}
	}

	public function index()
	{
		$data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();
		$data['url'] = 'Metode';

		$data['alternatif'] = $this->MetodeModel->get_nilai_setiap_alternatif();
		$data['kriteria'] = $this->MetodeModel->get_kriteria_by_id();
		$data['nilai'] = $this->MetodeModel->get_all_nilai();

		// $nilai = $data['nilai'];
		// echo '<pre>';
		// var_dump($nilai);

		$tranpose = [];
		foreach ($this->db->get('tb_nilai')->result() as $key => $value) {
			$tranpose[$value->fk_id_kriteria][$value->fk_id_alternatif] = $value->total_nilai;
		}
		// echo '<pre>';
		// var_dump($tranpose);
		// die();
		$sqrt   = [];
		foreach ($tranpose as $key => $value) {
			$sum = 0;
			foreach ($value as $k => $v) {
				$sum += pow($v, 2);
			}
			$sqrt[$key] = sqrt($sum);
		}
		// echo '<pre>';
		// var_dump($sqrt);
		// die();
		$normalisasi = [];
		foreach ($tranpose as $key => $value) {
			foreach ($value as $k => $v) {
				$normalisasi[$key][$k] = $v / $sqrt[$key];
			}
		}
		// echo '<pre>';
		// var_dump($normalisasi);
		// die();
		
		$kriteria = [];
		foreach ($this->db->get('tb_kriteria')->result() as $key => $value) {
			$kriteria[$value->id_kriteria] = $value;
		}

		$tabel_yi = [];
		foreach ($normalisasi as $key => $value) {
			foreach ($value as $k => $v) {
				$tabel_yi[$key][$k] = $v * $kriteria[$key]->bobot;
			}
		}
		//  echo '<pre>';
		//  var_dump($tabel_yi);
		// die();

		// $result = [];
		// foreach ($tabel_yi as $key => $value) {
		// 	$res = 0;
		// 	foreach ($value as $a=> $b) {
		// 		if ($kriteria[$a]->tipe == 1) {
		// 			$new_only_benefit[$a] = $b ;
		// 			$res += $b;	
		// 		} else {
		// 			$res -= $b;
		// 		}
		// 		var_dump($res);
		// 	}
		// 	$result[$key] = $res;
		// }
		// echo '<pre>';
		// var_dump($result);
		// die();
		

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('metode/index', $data);
		$this->load->view('templates/footer');
	}
}
