<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WargaModel extends CI_Model
{
    public function get_all_warga()
    {
        $this->db->select('*');
        $this->db->from('tb_warga');
        $this->db->order_by('id_warga');
        return $this->db->get()->result();
    }

    public function get_warga_by_id($id_warga)
    {
        $this->db->select('*');
        $this->db->from('tb_warga');
        $this->db->where('id_warga', $id_warga);
        return $this->db->get()->row(0);
    }

    public function insert()
    {
        $data = [
            'nama_alternatif' => $this->input->post('nama_alternatif'),
            'status_bangunan_tinggal' => $this->input->post('status_bangunan_tinggal'),
            'status_lahan_tinggal' => $this->input->post('status_lahan_tinggal'),
            'jenis_lantai_terluas' => $this->input->post('jenis_lantai_terluas'),
            'jenis_dinding' => $this->input->post('jenis_dinding'),
            'kondisi_dinding' => $this->input->post('kondisi_dinding'),
            'sumber_air_minum' => $this->input->post('sumber_air_minum'),
            'sumber_penerangan' => $this->input->post('sumber_penerangan'),
        ];

        $this->db->insert('tb_user', $data);
    }

    public function update_data($id_warga)
    {
        $data = [
            'nama_alternatif' => $this->input->post('nama_alternatif'),
            'status_bangunan_tinggal' => $this->input->post('status_bangunan_tinggal'),
            'status_lahan_tinggal' => $this->input->post('status_lahan_tinggal'),
            'jenis_lantai_terluas' => $this->input->post('jenis_lantai_terluas'),
            'jenis_dinding' => $this->input->post('jenis_dinding'),
            'kondisi_dinding' => $this->input->post('kondisi_dinding'),
            'sumber_air_minum' => $this->input->post('sumber_air_minum'),
            'sumber_penerangan' => $this->input->post('sumber_penerangan'),
        ];

        $this->db->set($data);
        $this->db->where('id_warga', $id_warga);
        $this->db->update('tb_warga', $data);
    }

    public function delete_data($id_warga)
    {
        $this->db->where('id_warga', $id_warga);
        $this->db->delete('tb_warga');
    }
}
