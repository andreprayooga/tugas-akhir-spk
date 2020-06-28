<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthModel extends CI_Model {
    
    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('tb_user');

        if($result->num_rows() == 1) {
            $data['id_user'] = $result->row(0)->id_user;
            $data['fk_id_user'] = $result->row(0)->fk_id_user;
            return $data;
        } else {
            return false;
        }
    }
}