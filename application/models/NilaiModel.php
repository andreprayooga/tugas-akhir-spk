<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NilaiModel extends CI_Model
{

    public function get_data_alternatif_from_nilai()
    {
        $query = $this->db->query('select distinct fk_id_alternatif from tb_nilai');
        return $query->result();
    }

    public function get_id_nilai($id)
    {
        $this->db->select('*');
        $this->db->from('tb_nilai');
        $this->db->where('id_nilai', $id);
        return $this->db->get()->row(0);
    }

    public function get_nilai_data()
    {
        $this->db->select('tb_nilai.total_nilai, tb_alternatif.nama_alternatif, tb_kriteria.nama_kriteria, tb_nilai.fk_id_alternatif, tb_nilai.fk_id_kriteria, tb_nilai.id_nilai');
        $this->db->from('tb_nilai');
        $this->db->join('tb_alternatif', 'tb_nilai.fk_id_alternatif = tb_alternatif.id_alternatif');
        $this->db->join('tb_kriteria', 'tb_nilai.fk_id_kriteria = tb_kriteria.id_kriteria');

        return $this->db->get()->result();
    }

    public function get_detail_nilai($id)
    {
        $this->db->select('tb_nilai.total_nilai, tb_alternatif.nama_alternatif, tb_kriteria.nama_kriteria, tb_nilai.fk_id_alternatif, tb_nilai.fk_id_kriteria, tb_nilai.id_nilai');
        $this->db->from('tb_nilai');
        $this->db->where('tb_nilai.fk_id_alternatif', $id);
        $this->db->join('tb_alternatif', 'tb_nilai.fk_id_alternatif = tb_alternatif.id_alternatif');
        $this->db->join('tb_kriteria', 'tb_nilai.fk_id_kriteria = tb_kriteria.id_kriteria');

        return $this->db->get()->result();
    }

    public function get_kriteria_by_alternatif($alternatif)
    {
        $this->db->select('tb_nilai.total_nilai, tb_alternatif.nama_alternatif, tb_kriteria.nama_kriteria, tb_nilai.fk_id_alternatif, tb_nilai.fk_id_kriteria, tb_nilai.id_nilai');
        $this->db->from('tb_nilai');
        $this->db->join('tb_alternatif', 'tb_nilai.fk_id_alternatif = tb_alternatif.id_alternatif');
        $this->db->join('tb_kriteria', 'tb_nilai.fk_id_kriteria = tb_kriteria.id_kriteria');
        $this->db->where('tb_nilai.fk_id_alternatif', $alternatif);

        return $this->db->get()->result();
    }

    public function get_nilai_by_kriteria($id)
    {
        $this->db->where('fk_id_kriteria', $id);
        $query = $this->db->get('tb_nilai');

        return $query->result();
    }

    public function insert_nilai($data)
    {
        $data = [
            'fk_id_alternatif' => $this->input->post('fk_id_alternatif'),
            'fk_id_kriteria' => $this->input->post('fk_id_kriteria'),
            'total_nilai' => $this->input->post('total_nilai'),
        ];

        $this->db->insert('tb_nilai', $data);
    }

    public function update_nilai($id)
    {
        $data = [
            'nilai' => $this->input->post('nilai'),
        ];

        $this->db->set($data);
        $this->db->where('id_nilai', $id);
        $this->db->update('tb_nilai', $data);
    }

    public function delete_nilai($id)
    {
        $this->db->where('id_nilai', $id);
        $this->db->delete('tb_nilai');
    }

    public function delete_nilai_by_alternatif($id_alternatif)
    {
        $this->db->where('fk_id_alternatif', $id_alternatif);
        $this->db->delete('tb_nilai');
    }
}
