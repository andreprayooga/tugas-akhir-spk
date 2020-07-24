<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WargaModel extends CI_Model
{
    public function get_all()
    {
        $this->db->from('tb_warga');
        $this->db->order_by('id_warga');
        return $this->db->get()->result();
    }

    public function get_by_id($id)
    {
        $this->db->from('tb_warga');
        $this->db->where('id_warga', $id);
        return $this->db->get()->row(0);
    }

    public function insert_warga()
    {
        $data = array(
            'nik' => $this->input->post('nik'),
            'nama_warga' => $this->input->post('nama_warga'),
            'status_bangunan_tinggal' => $this->input->post('status_bangunan_tinggal'),
            'status_lahan_tinggal' => $this->input->post('status_lahan_tinggal'),
            'jenis_lantai_terluas' => $this->input->post('jenis_lantai_terluas'),
            'jenis_dinding' => $this->input->post('jenis_dinding'),
            'kondisi_dinding' => $this->input->post('kondisi_dinding'),
            'jenis_atap' => $this->input->post('jenis_atap'),
            'kondisi_atap' => $this->input->post('kondisi_atap'),
            'sumber_air_minum' => $this->input->post('sumber_air_minum'),
            'sumber_penerangan' => $this->input->post('sumber_penerangan'),
        );

        $this->db->insert('tb_warga', $data);    
    }

    public function update_warga($id)
    {
        $data = array(
            'nik' => $this->input->post('nik'),
            'nama_warga' => $this->input->post('nama_warga'),
            'status_bangunan_tinggal' => $this->input->post('status_bangunan_tinggal'),
            'status_lahan_tinggal' => $this->input->post('status_lahan_tinggal'),
            'jenis_lantai_terluas' => $this->input->post('jenis_lantai_terluas'),
            'jenis_dinding' => $this->input->post('jenis_dinding'),
            'kondisi_dinding' => $this->input->post('kondisi_dinding'),
            'jenis_atap' => $this->input->post('jenis_atap'),
            'kondisi_atap' => $this->input->post('kondisi_atap'),
            'sumber_air_minum' => $this->input->post('sumber_air_minum'),
            'sumber_penerangan' => $this->input->post('sumber_penerangan'),
        );

        $this->db->set($data);
        $this->db->where('id_warga', $id);
        $this->db->update('tb_warga', $data);
    }

    public function delete_warga($id)
    {
        $this->db->where('id_warga', $id);
        $this->db->delete('tb_warga');
    }
}
