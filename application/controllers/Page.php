<?php 
	class Page extends CI_Controller{
		function __construct()
		{
			parent:: __construct();
			if($this->session->userdata('logged_in') !== TRUE);
			redirect('login');
		}

		function index(){
			//Mengizinkan akses Author
			if($this->session->userdata('role')==='author'){
				$this->load->view('v_dashboard');
			} else {
				echo "Access Denied...";
			}
		}

		function admin(){
			//Mengizinkan akses Admin
			if($this->session->userdata('role')==='admin'){
				$this->load->view('v_dashboard');;
			} else {
				echo "Access Denied...";
			}
		}

		function user(){
			//Mengizinkan akses User
			if($this->session->userdata('role')==='user'){
				$this->load->view('v_dashboard');;
			} else {
				echo "Access Denied...";
			}
		}
	}
	
?>
