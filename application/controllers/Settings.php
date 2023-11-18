<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Settings extends CI_Controller
{
  public function index()
  {
    $this->load->view('settings');
  }

  public function changepw(){
	$this->load->view('change_pw');
  }
}

