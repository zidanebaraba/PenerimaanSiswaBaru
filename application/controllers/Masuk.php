<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masuk extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index()
    {
        $this->load->view('login');
    }

    public function autentikasi()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->db->where('username', $username);
        $this->db->where('password', $password);

        if ($username === 'admin') {

            $user = $this->db->get('admin');
            $banyak = $user->num_rows();
            $data = $user->result();

            if ($banyak >= 1) {
                $data_session = array(
                    'id' => $data[0]->id,
                    'username' => $username,
                    'login' => true
                );

                $this->session->set_userdata($data_session);
                redirect('beranda');
            } else {
                $this->session->set_flashdata('gagal', 'Username atau Password Salah');
                $this->load->view('login');
            }
        } else {
            $user = $this->db->get('tb_siswa');
            $banyak = $user->num_rows();
            $data = $user->result();

            if ($banyak >= 1) {
                $data_session = array(
                    'id' => $data[0]->id,
                    'username' => $username,
                    'login' => true
                );

                $this->session->set_userdata($data_session);
                redirect('berandasiswa');
            } else {
                $this->session->set_flashdata('gagal', 'Username atau Password Salah');
                $this->load->view('login');
            }
        }
    }
    public function logout()
    {
        session_destroy();
        redirect('masuk');
    }
}
