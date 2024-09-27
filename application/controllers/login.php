<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('templete/header');
		$this->load->view('login');
		$this->load->view('templete/footer');
	}
	public function verifikasi()
	{
		#menangkap ap yg kita ketik di login
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		#menangkap dr database
		$user = $this->db->get_where('user',['username' => $username])->row_array();
		
		#proses pengecekan verifikasi
		if ($user){
			if ($password == $user['password']){
				$data =[
					'username' => $user['username']
				];
				$this->session->set_userdata($data);
				redirect('admin');
			} else {
				$this->session->set_flashdata('message','<h2>Password salah!</h2>');
				redirect('login');
			}
		#mengecek usn 
		} else {
			$this->session->set_flashdata('message','<h2>Username salah!</h2>');
			redirect('login');
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->set_flashdata('message','<h1>Berhasil logout</h1>');
		redirect('login');
	}
}
