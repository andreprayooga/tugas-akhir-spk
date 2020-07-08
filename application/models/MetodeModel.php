<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MetodeModel extends CI_Model
{
    public function get_all_nilai()
    {
        $this->db->select('*');
        $this->db->from('tb_ilai');
        $this->db->order_by('id_nilai');
        return $this->db->get()->result();
    }

    public function get_alternatif_by_id($id_alternatif)
    {
        $this->db->select('*');
        $this->db->from('tb_alternatif');
        $this->db->where('id_alternatif', $id_alternatif);
        return $this->db->get()->row(0);
    }

    function get_kriteria_by_id($id_kriteria)
    {
        $this->db->select('*');
        $this->db->from('tb_kriteria');
        $this->db->where('id_kriteria', $id_kriteria);
        return $this->db->get()->row(0);
    }
}
