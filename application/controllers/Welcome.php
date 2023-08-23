<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Mahasiswa_model');
	}

	public function index() //method pertama yang akan di eksekusi
	{
		if ($this->session->userdata('email')) {
			redirect(base_url('/mahasiswa'));
		} else {
			$data["title"] = "Welcome to study club";
			$this->load->view('template/header', $data);
			$this->load->view('template/navbar');
			$this->load->view('pages/auth/landingpage', $data);
			$this->load->view('template/footer');
		}
	}
}
