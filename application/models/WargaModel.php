<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WargaModel extends CI_Model {
    
    function get_all_warga()
    {
        $this->db->select('*');
		$this->db->from('tb_warga');
		$this->db->order_by('id_warga');
		return $this->db->get()->result();
    }
}