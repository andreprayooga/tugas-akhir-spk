<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KriteriaModel extends CI_Model
{

    var $table = 'tb_kriteria';

    function get_all_kriteria()
    {
        $this->db->select('*');
        $this->db->from('tb_kriteria');
        $this->db->order_by('id_kriteria');
        return $this->db->get()->result();
    }

    function get_kriteria_by_id($id_kriteria)
    {
        $this->db->select('*');
        $this->db->from('tb_kriteria');
        $this->db->where('id_kriteria', $id_kriteria);
        return $this->db->get()->row(0);
    }

    public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

    public function insert_data($data)
    {
        $this->db->insert($this->table, $data);
		return $this->db->insert_id();
    }

    public function get_kriteria()
    {
        $query = $this->db->get('tb_kriteria');
		return $query;
    }

    public function update_data($data, $where)
    {
        $this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
    }

    public function delete_by_id($id_kriteria)
    {
        $this->db->where('id_kriteria', $id_kriteria);
		$this->db->delete($this->table);
    }
}
