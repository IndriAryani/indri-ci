<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {
    public function simpanUser()
	{
		$data=
		[
			"username" => $this->input->post('username', true),
			#menyembunyikan password
			"password" => password_hash ($this->input->post('password'), PASSWORD_DEFAULT),
			"nama" => $this->input->post('nama', true)
		];
		
		$this->db->insert('user', $data);
	}
}