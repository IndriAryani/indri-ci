<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	public function index()
	{
		$this->load->model('siswa_model');
		$data['siswa'] = $this->siswa_model->getSiswa();
		
		$this->load->view('templete/header');
		$this->load->view('templete/menu');
		$this->load->view('admin', $data);
		$this->load->view('templete/footer');
	}

	public function hapus($nis){
		$this->db->delete('siswa', ['nis'=> $nis]);
		redirect('admin');
	}
	public function edit($nis){
		//memanggil siswa model
		$this->load->model('siswa_model');
		$data['edit'] = $this->siswa_model->getSiswaByNis($nis);
		$data['alamat'] = [1, 2, 3, 4];

		$this->load->view('templete/header');
		$this->load->view('edit_siswa', $data);
		$this->load->view('templete/footer');
	}
	public function update(){
		$data=
		[
			"nama" => $this->input->post('nama', true),
			"id_alamat" => $this->input->post('alamat', true),
			"no_telp" => $this->input->post('no_telp', true)

		];
		$this->db->where('nis', $this->input->post('nis'));
		$this->db->update('siswa', $data);
		redirect('admin');
	}
}
