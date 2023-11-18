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
}
