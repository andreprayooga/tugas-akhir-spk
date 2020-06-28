<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NilaiModel extends CI_Model {
    
    function get_all_warga()
    {
        $this->db->select('*');
		$this->db->from('tb_nilai');
		$this->db->order_by('id_nilai');
		return $this->db->get()->result();
    }
}