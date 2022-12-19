<?php

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('auth_model');
    }

    public function login_user() {
        $this->load->view('user/v_login');

        if ($this->input->post('btn_login')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $where = [
                'username' => $username,
                'password' => $password
            ];

            $cek = $this->auth_model->cek_login('tabel_user', $where)->num_rows();
            $get = $this->auth_model->getDataUser();
            foreach($get as $ge) {
                $nama = $ge->nama_user;
                $id_user = $ge->id_user;
            }

            if ($cek > 0) {
                $data_session = [
                    'nama' => $nama,
                    'id_user' => $id_user,
                    'status' => "Login"
                ];

                $this->session->set_userdata($data_session);
                redirect(base_url('user'));
            } else {
                echo "Username atau Password Salah!";
            }
        }
    }

    public function logout_user() {
		$this->session->sess_destroy();
		redirect(base_url('auth/login_user'));
	}

    public function login_admin() {
        $this->load->view('admin/v_login');

        if ($this->input->post('btn_login')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $where = [
                'username' => $username,
                'password' => $password
            ];

            $cek = $this->auth_model->cek_login('tabel_admin', $where)->num_rows();
            $get = $this->auth_model->getDataAdmin();
            foreach($get as $ge) {
                $nama = $ge->nama_admin;
            }

            if ($cek > 0) {
                $data_session = [
                    'nama' => $nama,
                    'status' => "Login"
                ];

                $this->session->set_userdata($data_session);
                redirect(base_url('admin'));
            } else {
                echo "Username atau Password Salah!";
            }
        }
    }

    public function logout_admin() {
		$this->session->sess_destroy();
		redirect(base_url('auth/login_admin'));
	}

    public function registrasi_user() {
        $this->load->view('user/v_registrasi');

        if ($this->input->post('btn_regis')) {
            $data['username'] = $this->input->post('username');
            $data['password'] = $this->input->post('password');
            $data['nama_user'] = $this->input->post('nama_user');
            $data['email'] = $this->input->post('email');

            $response = $this->auth_model->addUser($data);
            if ($response == TRUE) {
                echo "Berhasil";
                redirect(site_url('auth/login_user'));
            } else {
                echo "Gagal";
            }
        }
    }
}

?>