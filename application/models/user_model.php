<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {
    public function simpanUser()
	{
		$data=
		[
			"username" => $this->input->post('username', true),
			"password" => $this->input->post('password', true),
			"nama" => $this->input->post('nama', true)
		];
		
		$this->db->insert('user', $data);
	}
}