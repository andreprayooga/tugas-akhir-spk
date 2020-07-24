<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AlternatifModel extends CI_Model
{

    var $table = 'tb_alternatif';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_alternatif()
    {
        $this->db->select('*');
        $this->db->from('tb_alternatif');
        $this->db->order_by('id_alternatif');
        return $this->db->get()->result();
    }

    public function get_alternatif_by_id($id_alternatif)
    {
        $this->db->select('*');
        $this->db->from('tb_alternatif');
        $this->db->where('id_alternatif', $id_alternatif);
        return $this->db->get()->row(0);
    }

    public function get_nama_warga()
    {
        $this->db->select('tb_alternatif.fk_id_warga, tb_warga.id_warga, tb_warga.nama_warga, tb_alternatif.id_alternatif');
        $this->db->from('tb_alternatif');
        $this->db->join('tb_warga', 'tb_warga.id_warga = tb_alternatif.fk_id_warga');

        return $this->db->get()->result();
    }

    public function insert_data($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function get_alternatif()
    {
        $query = $this->db->get('tb_alternatif');
        return $query;
    }

    public function update_data($data, $where)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id_alternatif)
    {
        $this->db->where('id_alternatif', $id_alternatif);
        $this->db->delete($this->table);
    }
}
