<?php

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status') != "Login") {
            redirect(base_url('auth/login_user'));
        }
        $this->load->model('gor_model');
        $this->load->model('produk_model');
        $this->load->model('auth_model');
        $this->load->model('sewa_model');
        $this->load->model('booking_model');
    }

    public function index() {
        $data['gor'] = $this->gor_model->showNum();
        $data['produk'] = $this->produk_model->showNum();
        $data['user'] = $this->auth_model->showNum();
        $data['gors'] = $this->gor_model->getData();
        $data['produks'] = $this->produk_model->getData();
        $this->load->view('layout2/v_header');
        $this->load->view('user/v_index', $data);
        $this->load->view('layout2/v_footer');
    }

    public function sewa() {
        $id_produk = $this->input->get('id_produk');
        $result['data'] = $this->produk_model->getById($id_produk);
        $this->load->view('layout2/v_header');
        $this->load->view('sewa/v_sewa', $result);
        $this->load->view('layout2/v_footer');

        if ($this->input->post('btn_pinjam')) {

            $jumlah = $this->input->post('jumlah');
            $harga_produk = $this->input->post('harga_produk'); 
            $total_harga = $jumlah * $harga_produk;
            $id_user = $this->session->id_user;
            $sto = $this->input->post('stok');
            $stok = $sto - $jumlah;
            $this->sewa_model->updateStok($stok, $id_produk);
            
            $data['alamat_tujuan'] = $this->input->post('alamat_tujuan');
            $data['jumlah'] = $jumlah;
            $data['id_produk'] = $id_produk;
            $data['id_user'] = $id_user;
            $data['total_harga'] = $total_harga;
            $data['tgl_pinjam'] = date("m/d/y");

            $response = $this->sewa_model->add($data);
            if ($response == TRUE) {
                echo "Berhasil";
                redirect(base_url('user'));
            } else {
                echo "Gagal";
            }
        }
    }

    public function penyewaan() {
        $sewa = $this->sewa_model->getDa();
                foreach($sewa as $se) {
                    $id_sewa = $se->id_sewa;
                    $id_user = $se->id_user;
                }
        $data['sewas'] = $this->sewa_model->getData($id_user);
        $this->load->view('layout2/v_header');
        $this->load->view('sewa/v_penyewaan', $data);
        $this->load->view('layout2/v_footer');
    }

    public function booking() {
        $id_gor = $this->input->get('id_gor');
        $result['data'] = $this->gor_model->getById($id_gor);
        $this->load->view('layout2/v_header');
        $this->load->view('booking/v_booking', $result);
        $this->load->view('layout2/v_footer');

        if ($this->input->post('btn_pinjam')) {

            $id_user = $this->session->id_user;
            
            $data['lapangan'] = $this->input->post('lapangan');
            $data['tgl_booking'] = $this->input->post('tgl_booking');
            $data['jam_booking'] = $this->input->post('jam_booking');
            $data['jam_selesai'] = $this->input->post('jam_selesai');
            $data['id_user'] = $id_user;
            $data['id_gor'] = $id_gor;

            $response = $this->booking_model->add($data);
            if ($response == TRUE) {
                echo "Berhasil";
                redirect(site_url('https://wa.me/6285161620357'));
            } else {
                echo "Gagal";
            }
        }
    }

    public function pembookingan() {
        $booking = $this->booking_model->getDa();
                foreach($booking as $se) {
                    $id_booking = $se->id_booking;
                    $id_user = $se->id_user;
                }
        $data['bookings'] = $this->booking_model->getData($id_user);
        $this->load->view('layout2/v_header');
        $this->load->view('booking/v_pembookingan', $data);
        $this->load->view('layout2/v_footer');
    }

    public function artikel() {
        $this->load->view('layout2/v_header');
        $this->load->view('artikel/v_index');
        $this->load->view('layout2/v_footer');
    }
}

?>