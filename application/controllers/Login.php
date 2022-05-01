<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
        $this->load->helper('login');
    }

    public function index()
    {
        // Check if user already logged in
        if (IsLoggedIn()) {
            redirect('admin');
            return false;
        }

        $this->load->view('login');
    }

    public function gagal_login()
    {
        if (IsLoggedIn()) {
            redirect('admin');
            return false;
        }

        $this->load->view('gagal_login');
    }

    public function aksi_login()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password),
        );

        $cek = $this->m_login->cek_login("admin", $where)->num_rows();
        if ($cek > 0) {

            $data_session = array(
                'nama' => $username,
                'isLoggedIn' => true,
            );

            $this->session->set_userdata($data_session);
            // return "admin";
            redirect(base_url("admin"));
            // $this->load->view('admin');

        } else {
            echo "Username dan password salah !";
            redirect(base_url("login/gagal_login"));
        }
    }
}