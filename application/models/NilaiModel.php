<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NilaiModel extends CI_Model
{
    public function get_data_warga_from_nilai()
    {
        $query = $this->db->query('select distinct fk_id_warga from tb_nilai');
        return $query->result();
    }

    public function get_nilai_by_id($id)
    {
        $this->db->where('id_nilai', $id);
        $query = $this->db->get('tb_nilai');
        return $query->result();
    }

    public function get_data_warga()
    {
        $this->db->select('tb_warga.id_warga, nama_warga');
		$this->db->order_by("id_warga","asc");
		$query = $this->db->get('tb_warga');
		return $query->result();
    }

    public function get_nilai_data()
    {
        $this->db->select('tb_nilai.total_nilai, tb_warga.nama_warga, tb_kriteria.nama_kriteria, tb_nilai.fk_id_warga, tb_nilai.fk_id_kriteria, tb_nilai.id_nilai');
        $this->db->from('tb_nilai');
        $this->db->join('tb_warga', 'tb_nilai.fk_id_warga = tb_warga.id_warga');
        $this->db->join('tb_kriteria', 'tb_nilai.fk_id_kriteria = tb_kriteria.id_kriteria');

        return $this->db->get()->result();
    }

    public function get_detail_nilai($id)
    {
        $this->db->select('tb_nilai.total_nilai, tb_warga.nama_warga, tb_kriteria.nama_kriteria, tb_nilai.fk_id_warga, tb_nilai.fk_id_kriteria, tb_nilai.id_nilai');
        $this->db->from('tb_nilai');
        $this->db->where('tb_nilai.fk_id_warga', $id);
        $this->db->join('tb_warga', 'tb_nilai.fk_id_warga = tb_warga.id_warga');
        $this->db->join('tb_kriteria', 'tb_nilai.fk_id_kriteria = tb_kriteria.id_kriteria');

        return $this->db->get()->result();
    }

    public function get_kriteria_by_warga($warga)
    {
        $this->db->select('tb_nilai.total_nilai, tb_warga.nama_warga, tb_kriteria.nama_kriteria, tb_nilai.fk_id_warga, tb_nilai.fk_id_kriteria, tb_nilai.id_nilai');
        $this->db->from('tb_nilai');
        $this->db->join('tb_warga', 'tb_nilai.fk_id_warga = tb_warga.id_warga');
        $this->db->join('tb_kriteria', 'tb_nilai.fk_id_kriteria = tb_kriteria.id_kriteria');
        $this->db->where('tb_nilai.fk_id_warga', $warga);

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
        $this->db->insert('tb_nilai', $data);
    }

    public function update_nilai($id)
    {
        $data = [
            'total_nilai' => $this->input->post('total_nilai'),
        ];

        $this->db->where('id_nilai', $id);
        $this->db->update('tb_nilai', $data);
        if($this->db->affected_rows() == 1){
            return true;
        } else {
            return false;
        }
    }

    public function delete_nilai($id)
    {
        $this->db->where('id_nilai', $id);
        $this->db->delete('tb_nilai');
    }

    public function delete_nilai_by_id_warga($id)
    {
        $this->db->where('fk_id_warga', $id);
        $this->db->delete('tb_nilai');
    }
}
