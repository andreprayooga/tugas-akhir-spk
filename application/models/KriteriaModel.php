<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KriteriaModel extends CI_Model {
    
    function get_all_warga()
    {
        $this->db->select('*');
		$this->db->from('tb_kriteria');
		$this->db->order_by('id_kriteria');
		return $this->db->get()->result();
    }
}