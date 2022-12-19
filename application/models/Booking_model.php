<?php

class Booking_model extends CI_Model {
    public function add($data) {
        $this->db->insert('tabel_booking', $data);
        return true;
    }

    public function getData($id_user) {
        return $this->db->query("SELECT id_booking,tabel_booking.id_gor,nama_gor,alamat,no_telp,tgl_booking,jam_booking,jam_selesai,lapangan,gambar FROM tabel_gor
        INNER JOIN tabel_booking ON tabel_gor.id_gor=tabel_booking.id_gor INNER JOIN tabel_user
        ON tabel_booking.id_user = tabel_user.id_user WHERE tabel_user.id_user='$id_user'")->result();
    }

    public function getData2($id_user) {
        return $this->db->query("SELECT nama_user,tabel_user.id_user,id_booking,tabel_booking.id_gor,nama_gor,alamat,no_telp,tgl_booking,jam_booking,jam_selesai,lapangan,gambar FROM tabel_gor
        INNER JOIN tabel_booking ON tabel_gor.id_gor=tabel_booking.id_gor INNER JOIN tabel_user
        ON tabel_booking.id_user = tabel_user.id_user WHERE tabel_user.id_user='$id_user'")->result();
    }

    public function getDa() {
        return $this->db->get('tabel_booking')->result();
    }
}

?>