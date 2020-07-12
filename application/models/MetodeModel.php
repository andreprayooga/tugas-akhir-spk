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
        $this->db->order_by('id_alternatif', 'asc');
        $query = $this->db->get('tb_alternatif');
        return $query->result();
    }

    function get_kriteria_by_id()
    {
        $this->db->order_by('id_kriteria', 'asc');
        $query = $this->db->get('tb_kriteria');
        return $query->result();
    }

    public function get_niai_setiap_alternatif($id_alternatif, $id_kriteria)
    {
        $query = $this->db->query("SELECT * FROM tb_nilai WHERE fk_id_alternatif = '$id_alternatif' AND fk_id_kriteria = '$id_kriteria';");

        return $query->row_array();
    }

    public function get_data_penilaian($id_alternatif, $id_kriteria)
    {
        $query = $this->db->query("SELECT * FROM tb_nilai WHERE fk_id_alternatif= '$id_alternatif' AND fk_id_kriteria = '$id_kriteria';");

        return $query->row_array();
    }

    public function get_nilai_setiap_alternatif()
    {
        $query = $this->db->query("SELECT DISTINCT tb_alternatif.nama_alternatif, tb_alternatif.id_alternatif FROM tb_alternatif JOIN tb_nilai ON tb_alternatif.id_alternatif = tb_nilai.fk_id_alternatif;");

        return $query->result();
    }

    public function normalisasi_nilai($id_kriteria) // optimasi nilai
    {
        $query = $this->db->query("SELECT SQRT(SUM(POWER(total_nilai, 2))) AS nilai_pembagian FROM tb_nilai WHERE fk_id_kriteria='$id_kriteria';");

        return $query->row_array();
    }

    public function pembobotan_nilai($id_kriteria) // pembobotan nilai
    {
        $query = $this->db->query("SELECT ((total_nilai / nilai_pembagian) * tb_kriteria.bobot) AS pembobotan_setiap_nilai, tb_kriteria.bobot, tb_kriteria.tipe 
		FROM tb_nilai JOIN (SELECT SQRT(SUM(POWER(total_nilai, 2))) AS nilai_pembagian FROM tb_nilai WHERE fk_id_kriteria='$id_kriteria') AS bobot_nilai 
		JOIN tb_kriteria ON tb_kriteria.id_kriteria = tb_nilai.fk_id_kriteria 
        WHERE tb_kriteria.id_kriteria='$id_kriteria' GROUP BY tb_nilai.fk_id_alternatif");

        return $query->row_array();
    }


    public function hasil_nilai($id_alternatif)
    {
        $query = $this->db->query("SELECT * FROM tb_alternatif WHERE id_alternatif='$id_alternatif';");
        return $query->row_array();
    }
}
