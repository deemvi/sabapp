<?php

class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status') != "Login") {
            redirect(base_url('auth/login_admin'));
        }
        $this->load->model('gor_model');
        $this->load->model('produk_model');
        $this->load->model('auth_model');
        $this->load->model('booking_model');
        $this->load->model('sewa_model');
    }

    public function index() {
        $data['gor'] = $this->gor_model->showNum();
        $data['produk'] = $this->produk_model->showNum();
        $data['user'] = $this->auth_model->showNum();
        $data['sewa'] = $this->sewa_model->showNum();
        $this->load->view('layout/v_header');
        $this->load->view('admin/v_index', $data);
        $this->load->view('layout/v_footer');
    }

    public function gor() {
        $data['gors'] = $this->gor_model->getData();
        $this->load->view('layout/v_header');
        $this->load->view('booking/v_index', $data);
        $this->load->view('layout/v_footer');
    }

    public function tambah_gor() {
        $this->load->view('layout/v_header');
        $this->load->view('booking/v_create');
        $this->load->view('layout/v_footer');

        if($this->input->post('btn_tambah')) {
            $config['upload_path']          = 'assets/images/upload';
	        $config['allowed_types']        = 'jpeg|jpg|png';
	        $config['max_size']             = 5000;
	        $config['max_width']            = 1024;
	        $config['max_height']           = 768;
            $config['file_name']            = 'image_load'.time();
 
	        $this->upload->initialize($config);
 
            if ( ! $this->upload->do_upload('gambar')) {
                $error = $this->upload->display_errors();
			    echo $error;
            }else {
                $dat = $this->upload->data();
                $image = $dat['file_name'];
            }

            $data['nama_gor'] = $this->input->post('nama_gor');
            $data['alamat'] = $this->input->post('alamat');
            $data['no_telp'] = $this->input->post('no_telp');
            $data['gambar'] = $image;

            $response = $this->gor_model->add($data);
            if ($response == TRUE) {
                echo "Berhasil";
                redirect(site_url('admin/gor'));
            } else {
                echo "Gagal";
            }
        }
    }

    public function edit_gor() {
        $id_gor = $this->input->get('id_gor');
        $result['data'] = $this->gor_model->getById($id_gor);

        $this->load->view('layout/v_header');
        $this->load->view('booking/v_update', $result);
        $this->load->view('layout/v_footer');

        if ($this->input->post('btn_edit')) {

            $config['upload_path']          = 'assets/images/upload';
	        $config['allowed_types']        = 'jpeg|jpg|png';
	        $config['max_size']             = 5000;
	        $config['max_width']            = 5000;
	        $config['max_height']           = 5000;
            $config['file_name']            = 'image_load'.time();
 
	        $this->upload->initialize($config);
 
            if ( ! $this->upload->do_upload('gambar')) {
                $image = $this->input->post('old_pict');
            }else {
                $dat = $this->upload->data();
                $image = $dat['file_name'];
            }

            $nama_gor = $this->input->post('nama_gor');
            $alamat = $this->input->post('alamat');
            $no_telp = $this->input->post('no_telp');
            $gambar = $image;
            $this->gor_model->edit($nama_gor, $alamat, $no_telp, $gambar, $id_gor);
            redirect(site_url('admin/gor'));
        }
    }

    public function delete_gor() {
        $id_gor = $this->input->get('id_gor');
        $response = $this->gor_model->delete($id_gor);

        if ($response == TRUE) {
            echo "data berhasil dihapus";
            redirect(site_url('admin/gor'));
        } else {
            echo "gagal hapus";
        }
    }

    public function produk() {
        $data['produks'] = $this->produk_model->getData();
        $this->load->view('layout/v_header');
        $this->load->view('sewa/v_index', $data);
        $this->load->view('layout/v_footer');
    }

    public function tambah_produk() {
        $this->load->view('layout/v_header');
        $this->load->view('sewa/v_create');
        $this->load->view('layout/v_footer');

        if($this->input->post('btn_tambah')) {
            $config['upload_path']          = 'assets/images/upload';
	        $config['allowed_types']        = 'jpeg|jpg|png|webp';
	        $config['max_size']             = 5000;
	        $config['max_width']            = 5000;
	        $config['max_height']           = 5000;
            $config['file_name']            = 'image_load'.time();
 
	        $this->upload->initialize($config);
 
            if ( ! $this->upload->do_upload('gambar')) {
                $error = $this->upload->display_errors();
			    echo $error;
            }else {
                $dat = $this->upload->data();
                $image = $dat['file_name'];
            }

            $data['nama_produk'] = $this->input->post('nama_produk');
            $data['harga_produk'] = $this->input->post('harga_produk');
            $data['stok'] = $this->input->post('stok');
            $data['jenis_produk'] = $this->input->post('jenis_produk');
            $data['gambar'] = $image;

            $response = $this->produk_model->add($data);
            if ($response == TRUE) {
                echo "Berhasil";
                redirect(site_url('admin/produk'));
            } else {
                echo "Gagal";
            }
        }
    }

    public function edit_produk() {
        $id_produk = $this->input->get('id_produk');
        $result['data'] = $this->produk_model->getById($id_produk);

        $this->load->view('layout/v_header');
        $this->load->view('sewa/v_update', $result);
        $this->load->view('layout/v_footer');

        if ($this->input->post('btn_edit')) {

            $config['upload_path']          = 'assets/images/upload';
	        $config['allowed_types']        = 'jpeg|jpg|png|jfif';
	        $config['max_size']             = 5000;
	        $config['max_width']            = 5000;
	        $config['max_height']           = 5000;
            $config['file_name']            = 'image_load'.time();
 
	        $this->upload->initialize($config);
 
            if ( ! $this->upload->do_upload('gambar')) {
                $da = $this->input->post('old_pict');
            }else {
                $dat = $this->upload->data();
                $da = $dat['file_name'];
            }

            $nama_produk = $this->input->post('nama_produk');
            $harga_produk = $this->input->post('harga_produk');
            $stok = $this->input->post('stok');
            $jenis_produk = $this->input->post('jenis_produk');
            $gambar = $da;
            $this->produk_model->edit($nama_produk, $harga_produk, $stok, $jenis_produk, $gambar, $id_produk);
            redirect(site_url('admin/produk'));
        }
    }

    public function delete_produk() {
        $id_produk = $this->input->get('id_produk');
        $response = $this->produk_model->delete($id_produk);

        if ($response == TRUE) {
            echo "data berhasil dihapus";
            redirect(site_url('admin/produk'));
        } else {
            echo "gagal hapus";
        }
    }

    public function booking() {
        $booking = $this->booking_model->getDa();
                foreach($booking as $se) {
                    $id_booking = $se->id_booking;
                    $id_user = $se->id_user;
                }
        $data['bookings'] = $this->booking_model->getData2($id_user);
        $this->load->view('layout/v_header');
        $this->load->view('admin/v_booking', $data);
        $this->load->view('layout/v_footer');
    }

    public function sewa() {
        $sewa = $this->sewa_model->getDa();
                foreach($sewa as $se) {
                    $id_sewa = $se->id_sewa;
                    $id_user = $se->id_user;
                }
        $data['sewas'] = $this->sewa_model->getData2($id_user);
        $this->load->view('layout/v_header');
        $this->load->view('admin/v_sewa', $data);
        $this->load->view('layout/v_footer');
    }

    public function artikel() {
        $this->load->view('layout/v_header');
        $this->load->view('artikel/v_index2');
        $this->load->view('layout/v_footer');
    }
}

?>