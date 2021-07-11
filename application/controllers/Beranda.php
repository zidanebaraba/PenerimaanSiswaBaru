<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
	// FUNGSI UTAMA - DIRECT KE HALAMAN views/beranda.php

	public function index()
	{
		if ($this->session->userdata('login') == true) {
			$data['jmlhsiswa'] = $this->db->get('tb_siswa')->result();
			$data['siswa'] = $this->db->get('tb_siswa')->num_rows();
			$this->load->view('beranda', $data);
		} else {
			redirect('masuk');
		}
	}
	// FUNGSI PENAMBAHAN DAN SIMPAN DATA DARI ADMIN - MULAI
	public function tambah()
	{

		$data['siswa'] = $this->db->get('tb_siswa')->num_rows();

		$this->load->view('tsiswa', $data);
	}

	public function simpan()
	{
		$nik = $this->input->post('nik');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$gender = $this->input->post('gender');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->input->post('status');

		$data = array(
			'nik' => $nik,
			'nama_lengkap' => $nama_lengkap,
			'tgl_lahir' => $tgl_lahir,
			'gender' => $gender,
			'username' => $username,
			'password' => $password,
			'status' => $status
		);

		$this->db->insert('tb_siswa', $data);

		redirect('beranda');
	}
	// FUNGSI PENAMBAHAN DAN SIMPAN DATA DARI ADMIN - SELESAI

	// FUNGSI HAPUS DATA - MULAI

	public function hapus($id)
	{
		$this->db->where('nik', $id);
		$this->db->delete('tb_siswa');
		redirect('beranda');
	}

	// FUNGSI HAPUS DATA - SELESAI

	// FUNGSI UBAH DATA - MULAI

	public function ubah($id)
	{
		$this->db->where('nik', $id);
		$data['cari'] = $this->db->get('tb_siswa')->result();
		$this->load->view('usiswa', $data);
	}

	public function subah()
	{
		$nik = $this->input->post('nik');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$gender = $this->input->post('gender');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status = $this->input->post('status');

		$data = array(
			'nik' => $nik,
			'nama_lengkap' => $nama_lengkap,
			'tgl_lahir' => $tgl_lahir,
			'gender' => $gender,
			'username' => $username,
			'password' => $password,
			'status' => $status
		);
		$this->db->where('nik', $nik);
		$this->db->update('tb_siswa', $data);
		redirect('beranda');
	}

	// FUNGSI UBAH DATA - SELESAI
}
