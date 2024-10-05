<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class siswa_model extends CI_Model {

	public function getSiswa()
	{
        $this->db->select('*'); 
        $this->db->from('siswa'); 
        $this->db->join('alamat', 'alamat.id = siswa.alamat_id'); 
        return $this->db->get()->result_array(); 
	}
	public function tambahSiswa()
	{
		$data=
		[
			"nama" => $this->input->post('nama', true),
			"alamat_id" => $this->input->post('alamat', true),
			"no_telp" => $this->input->post('no_telp', true)
		];
		
		$this->db->insert('siswa', $data);
	}
	public function getSiswaByNis($nis){
		return $this->db->get_where('siswa', ['nis' =>$nis])->row_array();
	}
}
