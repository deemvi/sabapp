<?php

class Sewa_model extends CI_Model {
    public function updateStok($stok, $id_produk) {
        $query = $this->db->query("UPDATE tabel_produk SET stok='$stok' WHERE id_produk='$id_produk'");
    }

    public function add($data) {
        $this->db->insert('tabel_sewa', $data);
        return true;
    }

    public function getData($id_user) {
        return $this->db->query("SELECT id_sewa,tabel_sewa.id_produk,nama_produk,jumlah,alamat_tujuan,total_harga,tgl_pinjam,gambar FROM tabel_produk
        INNER JOIN tabel_sewa ON tabel_produk.id_produk=tabel_sewa.id_produk INNER JOIN tabel_user
        ON tabel_sewa.id_user = tabel_user.id_user WHERE tabel_user.id_user='$id_user'")->result();
    }

    public function getData2($id_user) {
        return $this->db->query("SELECT nama_user,tabel_user.id_user,id_sewa,tabel_sewa.id_produk,nama_produk,jumlah,alamat_tujuan,total_harga,tgl_pinjam,gambar FROM tabel_produk
        INNER JOIN tabel_sewa ON tabel_produk.id_produk=tabel_sewa.id_produk INNER JOIN tabel_user
        ON tabel_sewa.id_user = tabel_user.id_user WHERE tabel_user.id_user='$id_user'")->result();
    }

    public function getDa() {
        return $this->db->get('tabel_sewa')->result();
    }

    public function showNum() {
        return $this->db->query("SELECT * FROM tabel_sewa")->num_rows();
    }
}

?>