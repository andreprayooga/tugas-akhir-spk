<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MetodeModel extends CI_Model
{
    public function get_all_nilai()
    {
        $this->db->select('*');
        $this->db->from('tb_nilai');
        $this->db->order_by('id_nilai');
        return $this->db->get()->result();
    }

    public function get_alternatif_by_id()
    {
        $this->db->select('*');
        $this->db->from('tb_alternatif');
        $this->db->where('id_alternatif');
        return $this->db->get()->row(0);
    }

    function get_kriteria_by_id($id_kriteria)
    {
        $this->db->select('*');
        $this->db->from('tb_kriteria');
        $this->db->where('id_kriteria', $id_kriteria);
        return $this->db->get()->row(0);
    }

    public function get_data_nilai($id_alternatif, $id_kriteria)
    {
        $query = $this->db->query("SELECT * FROM tb_ilai WHERE fk_id_alternatif = '$id_alternatif' AND fk_id_kriteria = '$id_kriteria';");

		return $query->row_array();
    }

    public function get_data_penilaian($id_alternatif, $id_kriteria)
    {
        $query = $this->db->query("SELECT * FROM tb_ilai WHERE fk_id_alternatif= '$id_alternatif' AND fk_id_kriteria = '$id_kriteria';");

		return $query->row_array();
    }

    public function get_nilai_setiap_alternatif()
    {
        $query = $this->db->query("SELECT DISTINCT tb_alternatif.nama_alternatif, tb_alternatif.id_alternatif FROM tb_alternatif JOIN tb_nilai ON tb_alternatif.id_alternatif = tb_nilai.fk_id_alternatif;");

		return $query->result();
    }

    public function normalisasi_nilai($id_kriteria) // optimasi nilai
    {
        $query = $this->db->query("SELECT SQRT(SUM(POWER(nilai,2)))as pembagi from tb_nilai WHERE fk_id_kriteria='$id_kriteria';");

		return $query->row_array();
    }

    public function pembobotan_nilai($id_kriteria) // pembobotan nilai
    {
        $query = $this->db->query("SELECT ((nilai/pembagi)*kriteria.bobot) as pembobotan, kriteria.bobot, kriteria.tipe 
		from nilai join( select SQRT(SUM(POWER(nilai,2)))as pembagi from nilai WHERE id_kriteria='$id_kriteria') as b 
		JOIN Kriteria ON kriteria.id_kriteria=nilai.id_kriteria 
		WHERE kriteria.id_kriteria='$id_kriteria' GROUP BY nilai.id_alternatif");
		return $query->row_array();
    }

    public function hasil_nilai($id_alternatif)
    {
        $query = $this->db->query("SELECT * FROM tb_alternatif WHERE id_alternatif='$id_alternatif';");
		return $query->row_array();
    }
}
