<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah_siswa extends CI_Controller {

	public function index()
	{	
		$this->load->view('templete/header');
		$this->load->view('tambah_siswa');
		$this->load->view('templete/footer');
	}
	public function tambah()
	{
		$this->load->model('siswa_model');
		$data['siswa'] = $this->siswa_model->tambahSiswa();
		redirect('admin');
	}
}
