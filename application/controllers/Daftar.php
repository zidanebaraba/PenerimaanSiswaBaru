<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar extends CI_Controller
{
    public function index()
    {
        $data['jmlhsiswa'] = $this->db->get('tb_siswa')->result();
        $data['siswa'] = $this->db->get('tb_siswa')->num_rows();
        $this->load->view('daftar', $data);
    }
}
