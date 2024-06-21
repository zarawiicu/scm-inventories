<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url', 'form'));
		$this->load->model('Login_model'); //call model
	}

	function index()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'password', 'required');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/v_register');
		} else {
			$data['nama']   =    $this->input->post('nama');
			$data['username'] =    $this->input->post('username');
			$data['email']  =    $this->input->post('email');
			$data['password'] =    md5($this->input->post('password'));
			$data['no_telp']  =    $this->input->post('no_telp');
			$data['alamat']  =    $this->input->post('alamat');

			$this->Login_model->mendaftar($data);
			$redirect('login');
		}
	}
}
