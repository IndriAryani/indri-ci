<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_model extends CI_Model {

	public function getSiswa()
	{
        //mngmbil smua data dr tabel siswa
		return $this->db->get('siswa')->result_array();
	}
	public function tambahSiswa()
	{
		$data=
		[
			"nama" => $this->input->post('nama', true),
			"alamat" => $this->input->post('alamat', true),
			"no_telp" => $this->input->post('no_telp', true)
		];
		
		$this->db->insert('siswa', $data);
	}
	public function getSiswaByNis($nis){
		return $this->db->get_where('siswa', ['nis' =>$nis])->row_array();
	}
}
