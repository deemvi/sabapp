<?php

class Auth_model extends CI_Model {
    public function cek_login($table, $where) {
        return $this->db->get_where($table, $where);
    }

    public function getDataAdmin() {
        return $this->db->get('tabel_admin')->result();
    }

    public function getDataUser() {
        return $this->db->get('tabel_user')->result();
    }

    public function addUser($data) {
        $this->db->insert('tabel_user', $data);
        return true;
    }

    public function showNum() {
        return $this->db->query("SELECT * FROM tabel_user")->num_rows();
    }
}

?>