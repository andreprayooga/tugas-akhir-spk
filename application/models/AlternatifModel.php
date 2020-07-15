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

    public function get_alternatif_by_id($id_alternatif)
    {
        $this->db->select('*');
        $this->db->from('tb_alternatif');
        $this->db->where('id_alternatif', $id_alternatif);
        return $this->db->get()->row(0);
    }

    public function get_warga_by_id()
    {
        $this->db->select('*');
        $this->db->from('tb_warga');
        $this->db->order_by('id_warga');
        return $this->db->get()->result();
    }

    public function get_detail_warga_by_id($id_warga)
    {
        $this->db->select('tb_alternatif.fk_id_warga, tb_warga.id_warga, tb_warga.status_bangunan_tinggal, tb_warga.status_lahan_tinggal, tb_warga.jenis_lantai_terluas, tb_warga.jenis_dinding, tb_warga.kondisi_dinding, tb_warga.jenis_atap, tb_warga.kondisi_atap, tb_warga.sumber_air_minum, tb_warga.sumber_penerangan');
        $this->db->from('tb_warga');
        $this->db->join('tb_alternatif', 'tb_alternatif.fk_id_warga = tb_warga.id_warga');
        $this->db->where('tb_alternatif.fk_id_warga', $id_warga);

        return $this->db->get()->result();
    }

    public function insert_data()
    {
        $data = [
            'kode_alternatif' => $this->input->post('kode_alternatif'),
            'nama_alternatif' => $this->input->post('nama_alternatif'),
        ];

        $this->db->insert('tb_alternatif', $data);
    }

    public function update_data($id_alternatif)
    {
        $data = [
            'kode_alternatif' => $this->input->post('kode_alternatif'),
            'nama_alternatif' => $this->input->post('nama_alternatif'),
        ];

        $this->db->set($data);
        $this->db->where('id_alternatif', $id_alternatif);
        $this->db->update('tb_alternatif', $data);
    }

    public function delete_data($id_alternatif)
    {
        $this->db->where('id_alternatif', $id_alternatif);
        $this->db->delete('tb_alternatif');
    }
}
