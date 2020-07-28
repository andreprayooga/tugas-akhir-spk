<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Warga extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation', 'session');
		$this->load->model('WargaModel');
		//validasi jika user belum login
		if ($this->session->userdata('cek_login') != TRUE) {
			redirect('auth', 'refresh');
		}
	}

	public function index()
	{
		$data['url'] = 'Warga';
		$data['data_warga'] = $this->WargaModel->get_all();
		$data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/navbar', $data);
		$this->load->view('warga/index', $data);
		$this->load->view('templates/footer');
	}

	public function insert()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'trim|required');
		$this->form_validation->set_rules('nama_warga', 'Nama Warga', 'trim|required');
		$this->form_validation->set_rules('usia', 'Usia', 'trim|required|numeric');
		$this->form_validation->set_rules('status_bangunan_tinggal', 'Status Bangunan Tinggal', 'trim|required');
		$this->form_validation->set_rules('status_lahan_tinggal', 'Status Lahan Tinggal', 'trim|required');
		$this->form_validation->set_rules('jenis_lantai_terluas', 'Jenis Lantai Terluas', 'trim|required');
		$this->form_validation->set_rules('jenis_dinding', 'Jenis Dinding', 'trim|required');
		$this->form_validation->set_rules('kondisi_dinding', 'Kondisi Dinding', 'trim|required');
		$this->form_validation->set_rules('jenis_atap', 'Jenis Atap', 'trim|required');
		$this->form_validation->set_rules('kondisi_atap', 'Kondisi Atap', 'trim|required');
		$this->form_validation->set_rules('sumber_air_minum', 'Sumber Air Minum', 'trim|required');
		$this->form_validation->set_rules('sumber_penerangan', 'Sumber Penerangan', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['url'] = 'Warga';
			$data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('warga/insert', $data);
			$this->load->view('templates/footer');
		} else {
			$this->WargaModel->insert_warga();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses data berhasil <b>ditambahkan</b>!</div>');
			redirect('warga', 'refresh');
		}
	}

	public function update($id)
	{
		$this->form_validation->set_rules('nik', 'NIK', 'trim|required');
		$this->form_validation->set_rules('nama_warga', 'Nama Warga', 'trim|required');
		$this->form_validation->set_rules('usia', 'Usia', 'trim|required|numeric');
		$this->form_validation->set_rules('status_bangunan_tinggal', 'Status Bangunan Tinggal', 'trim|required');
		$this->form_validation->set_rules('status_lahan_tinggal', 'Status Lahan Tinggal', 'trim|required');
		$this->form_validation->set_rules('jenis_lantai_terluas', 'Jenis Lantai Terluas', 'trim|required');
		$this->form_validation->set_rules('jenis_dinding', 'Jenis Dinding', 'trim|required');
		$this->form_validation->set_rules('kondisi_dinding', 'Kondisi Dinding', 'trim|required');
		$this->form_validation->set_rules('jenis_atap', 'Jenis Atap', 'trim|required');
		$this->form_validation->set_rules('kondisi_atap', 'Kondisi Atap', 'trim|required');
		$this->form_validation->set_rules('sumber_air_minum', 'Sumber Air Minum', 'trim|required');
		$this->form_validation->set_rules('sumber_penerangan', 'Sumber Penerangan', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['url'] = 'Warga';
			$data['data'] = $this->WargaModel->get_by_id($id);
			$data['session_login'] = $this->db->get_where('tb_user', ['nama_lengkap' => $this->session->userdata('nama_lengkap')])->row_array();

			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('templates/navbar', $data);
			$this->load->view('warga/update', $data);
			$this->load->view('templates/footer');
		} else {
			$this->WargaModel->update_warga($id);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Sukses data berhasil <b>diupdate</b>!</div>');
			redirect('warga', 'refresh');
		}
	}

	public function delete($id)
	{
		$this->WargaModel->delete_warga($id);
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Sukses, data berhasil <b>dihapus</b>!</div>');
		redirect('warga', 'refresh');
	}

	public function export_excel()
	{
		$data['data_warga'] = $this->WargaModel->get_all();

		require(APPPATH . 'third_party/PHPExcel/Classes/PHPExcel.php');
		require(APPPATH . 'third_party/PHPExcel/Classes/PHPExcel/IOFactory.php');
		require(APPPATH . 'third_party/PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');

		$wargaPHPExcel = new PHPExcel();

		$wargaPHPExcel->getProperties()->setCreator("Kristina");
		$wargaPHPExcel->getProperties()->setLastModifiedBy("Kristina");
		$wargaPHPExcel->getProperties()->setTitle("Data Warga");
		$wargaPHPExcel->getProperties()->setSubject("");
		$wargaPHPExcel->getProperties()->setDescription("");

		$wargaPHPExcel->setActiveSheetIndex(0);

		$wargaPHPExcel->getActiveSheet()->setCellValue('A1', 'No');
		$wargaPHPExcel->getActiveSheet()->setCellValue('B1', 'NIK');
		$wargaPHPExcel->getActiveSheet()->setCellValue('C1', 'Nama Warga');
		$wargaPHPExcel->getActiveSheet()->setCellValue('D1', 'Status Bangunan Tinggal');
		$wargaPHPExcel->getActiveSheet()->setCellValue('E1', 'Status Lahan Tinggal');
		$wargaPHPExcel->getActiveSheet()->setCellValue('F1', 'Jenis Lantai Terluas');
		$wargaPHPExcel->getActiveSheet()->setCellValue('G1', 'Jenis Dinding');
		$wargaPHPExcel->getActiveSheet()->setCellValue('H1', 'Kondisi Dinding');
		$wargaPHPExcel->getActiveSheet()->setCellValue('I1', 'Jenis Atap');
		$wargaPHPExcel->getActiveSheet()->setCellValue('J1', 'Kondisi Atap');
		$wargaPHPExcel->getActiveSheet()->setCellValue('K1', 'Sumber Air Minum');
		$wargaPHPExcel->getActiveSheet()->setCellValue('L1', 'Sumber Penerangan');

		$baris = 2;
		$x = 1;

		foreach ($data['data_warga'] as $data) {
			$wargaPHPExcel->getActiveSheet()->setCellValue('A' . $baris, $x++);
			$wargaPHPExcel->getActiveSheet()->setCellValue('B' . $baris, $data->nik);
			$wargaPHPExcel->getActiveSheet()->setCellValue('C' . $baris, $data->nama_warga);
			$wargaPHPExcel->getActiveSheet()->setCellValue('D' . $baris, $data->status_bangunan_tinggal);
			$wargaPHPExcel->getActiveSheet()->setCellValue('E' . $baris, $data->status_lahan_tinggal);
			$wargaPHPExcel->getActiveSheet()->setCellValue('F' . $baris, $data->jenis_lantai_terluas);
			$wargaPHPExcel->getActiveSheet()->setCellValue('G' . $baris, $data->jenis_dinding);
			$wargaPHPExcel->getActiveSheet()->setCellValue('H' . $baris, $data->kondisi_dinding);
			$wargaPHPExcel->getActiveSheet()->setCellValue('I' . $baris, $data->jenis_atap);
			$wargaPHPExcel->getActiveSheet()->setCellValue('J' . $baris, $data->kondisi_atap);
			$wargaPHPExcel->getActiveSheet()->setCellValue('K' . $baris, $data->sumber_air_minum);
			$wargaPHPExcel->getActiveSheet()->setCellValue('L' . $baris, $data->sumber_penerangan);

			$baris++;
		}

		$filename = "Data Warga " . date("d-m-Y-H-i-s") . '.xlsx';

		$wargaPHPExcel->getACtiveSheet()->setTitle("Data Warga");

		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		header('Content-Disposition: attachment;filename="' . $filename . '"');
		header('Cache-Control: max-age = 0');

		$writer = PHPExcel_IOFactory::createWriter($wargaPHPExcel, 'Excel2007');
		$writer->save('php://output');

		exit;
	}

	public function export_pdf()
	{
		$this->load->library('dompdf_gen');

		$data['data_warga'] = $this->WargaModel->get_all();

		$this->load->view('warga/pdf_warga', $data);

		$paper_size = 'A4';
		$orientation = 'landscape';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("Laporan Warga PDF", array('Attachment' => 0));
	}
}
