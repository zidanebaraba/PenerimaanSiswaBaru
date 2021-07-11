<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BerandaSiswa extends CI_Controller
{
    public function index()
    {
        $user = $this->session->userdata('username');

        $this->db->where('username', $user);
        $this->db->select('status');
        $data['cari'] = $this->db->get('tb_siswa')->result();

        $this->load->view('berandasiswa', $data);
    }
}
