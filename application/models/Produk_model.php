<?php

class Produk_model extends CI_Model {
    public function getData() {
        return $this->db->get('tabel_produk')->result();
    }

    public function add($data) {
        $this->db->insert('tabel_produk', $data);
        return true;
    }

    public function getById($id_produk) {
        return $this->db->get_where('tabel_produk', ["id_produk" => $id_produk])->result();
    }

    public function edit($nama_produk, $harga_produk, $stok, $jenis_produk, $gambar, $id_produk) {
        $query = $this->db->query("UPDATE tabel_produk SET nama_produk='$nama_produk', harga_produk='$harga_produk', stok='$stok', jenis_produk='$jenis_produk', gambar='$gambar' WHERE id_produk='$id_produk'");
    }

    public function delete($id_produk) {
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('tabel_produk');
        return TRUE;
    }

    public function showNum() {
        return $this->db->query("SELECT * FROM tabel_produk")->num_rows();
    }
}

?>