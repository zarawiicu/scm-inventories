<?php

class Welcome extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

	function index(){
		$this->load->view('templates/header');
		$this->load->view('landing_page');
		$this->load->view('templates/footer');
	}

	function about_us(){
		$this->load->view('templates/header');
		$this->load->view('home/about-us');
		$this->load->view('templates/footer');
	}

	function prod_app(){
		$this->load->view('templates/header');
		$this->load->view('home/prod-app');
		$this->load->view('templates/footer');
	}

	function prod_blog(){
		$this->load->view('templates/header');
		$this->load->view('home/prod-blog');
		$this->load->view('templates/footer');
	}

	function portofolio(){
		$this->load->view('templates/header');
		$this->load->view('home/portofolio');
		$this->load->view('templates/footer');
	}

	function contact_us(){
		$this->load->view('templates/header');
		$this->load->view('home/contact-us');
		$this->load->view('templates/footer');
	}
}
