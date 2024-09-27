<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
    public function index()
	{
		$this->load->view('templete/header');
		$this->load->view('daftar');
		$this->load->view('templete/footer');
	}
    public function simpan()
    {
		$this->load->model('user_model');
		$data['user'] = $this->user_model->simpanUser();
        $this->session->set_flashdata('message','<h2>User berhasil ditambahkan</h2>');
		redirect('login');
    }
}