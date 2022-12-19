<?php

class Gor_model extends CI_Model {
    public function getData() {
        return $this->db->get('tabel_gor')->result();
    }

    public function add($data) {
        $this->db->insert('tabel_gor', $data);
        return true;
    }

    public function getById($id_gor) {
        return $this->db->get_where('tabel_gor', ["id_gor" => $id_gor])->result();
    }

    public function edit($nama_gor, $alamat, $no_telp, $gambar, $id_gor) {
        $query = $this->db->query("UPDATE tabel_gor SET nama_gor='$nama_gor', alamat='$alamat', no_telp='$no_telp', gambar='$gambar' WHERE id_gor='$id_gor'");
    }

    public function delete($id_gor) {
        $this->db->where('id_gor', $id_gor);
        $this->db->delete('tabel_gor');
        return TRUE;
    }

    public function showNum() {
        return $this->db->query("SELECT * FROM tabel_gor")->num_rows();
    }
}

?>