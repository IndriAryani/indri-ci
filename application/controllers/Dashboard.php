<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{

    public function index() {
        $this->load->view('v_dashboard');
    }

    public function tampil_about() {
        $this->load->view('v_about');
    }
}
