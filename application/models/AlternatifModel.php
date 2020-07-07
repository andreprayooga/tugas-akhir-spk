<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AlternatifModel extends CI_Model
{

    public function get_all_alternatif()
    {
        $this->db->select('*');
        $this->db->from('tb_alternatif');
        $this->db->order_by('id_alternatif');
        return $this->db->get()->result();
    }

    public function get_id($id)
    {
        $this->db->select('*');
        $this->db->from('tb_alternatif');
        $this->db->where('id_alternatif', $id);
        return $this->db->get()->row(0);
    }

    public function insert_data()
    {
        $data = [
            'kode_alternatif' => $this->input->post('kode_alternatif'),
            'nama_alternatif' => $this->input->post('nama_alternatif'),
        ];

        $this->db->insert('tb_alternatif', $data);
    }

    public function update_data($id)
    {
        $data = [
            'kode_alternatif' => $this->input->post('kode_alternatif'),
            'nama_alternatif' => $this->input->post('nama_alternatif'),
        ];  

        $this->db->set($data);
        $this->db->where('id_alternatif', $id);
        $this->db->update('tb_alternatif', $data); 
    }

    public function delete_data($id)
    {
        $this->db->where('id_alternatif', $id);
        $this->db->delete('tb_alternatif');
    }
}
