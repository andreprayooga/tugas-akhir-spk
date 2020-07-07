<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KriteriaModel extends CI_Model
{

    function get_all_kriteria()
    {
        $this->db->select('*');
        $this->db->from('tb_kriteria');
        $this->db->order_by('id_kriteria');
        return $this->db->get()->result();
    }

    function get_id($id)
    {
        $this->db->select('*');
        $this->db->from('tb_kriteria');
        $this->db->where('id_kriteria', $id);
        return $this->db->get()->row(0);
    }

    function insert_data()
    {
        $data = [
            'nama_kriteria' => $this->input->post('nama_kriteria'),
            'tipe' => $this->input->post('tipe'),
            'bobot' => $this->input->post('bobot'),
        ];

        $this->db->insert('tb_kriteria', $data);
    }

    function update_data($id)
    {
        $data = [
            'nama_kriteria' => $this->input->post('nama_kriteria'),
            'tipe' => $this->input->post('tipe'),
            'bobot' => $this->input->post('bobot'),
        ];

        $this->db->set($data);
        $this->db->where('id_kriteria', $id);
        $this->db->update('tb_kriteria', $data);
    }

    function delete_data($id)
    {
        $this->db->where('id_kriteria', $id);
        $this->db->delete('tb_kriteria');
    }
}