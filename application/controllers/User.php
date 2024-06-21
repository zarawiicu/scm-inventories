<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
  function __construct()
    {
        parent::__construct();
		$this->load->model('User_model');
    }

	function index(){
		$this->load->view('user');
	}

	public function get_data(){
		$list = $this->User_model->get_datatable();
		$data = [];
		$no = $_POST['start'];
		foreach ($list as $item){
			$row = array();

			$row[] = $item->id;
			$row[] = $item->nama;
			$row[] = $item->username;
			$row[] = $item->email;
			$row[] = $item->password;
			$row[] = $item->no_telp;
			$row[] = $item->alamat;
			$row[] = $item->role;
			$row[] = '
				<a href="#" class="btn btn-sm" onclick="get_kode('."'".$item->id."', 'view'".')"><i class="ti ti-eye"></i></a>
				<a href="#" class="btn btn-sm" onclick="get_kode('."'".$item->id."', 'edit'".')"><i class="ti ti-edit"></i></a>
				<a href="#" class="btn btn-sm" onclick="get_kode('."'".$item->id."', 'delete'".')"><i class="ti ti-trash"></i></a>
			';

			$data[] = $row;
		}

		$output = [
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->User_model->count_all(),
			"recordsFiltered" => $this->User_model->count_filtered(),
			"data" => $data,
		];

		echo json_encode($output);
	}

	public function create(){
		$this->_validation();
		$data = [
			'nama' => htmlspecialchars($this->input->post('nama')),
			'username' => htmlspecialchars($this->input->post('username')),
			'email' => htmlspecialchars($this->input->post('email')),
			'password' => htmlspecialchars($this->input->post('password')),
			'no_telp' => htmlspecialchars($this->input->post('no_telp')),
			'alamat' => htmlspecialchars($this->input->post('alamat')),
			'role' => htmlspecialchars($this->input->post('role')),
		];
		
		$insert = $this->User_model->add($data);
		if($insert > 0){
			$toast_button['status'] = 'success';
		} else {
			$toast_button['status'] = 'failed';
		}
		
		echo json_encode($toast_button);
	}

	public function get_kode($id){
		$data = $this->User_model->get_kode($id);
		echo json_encode($data);
	}

	public function update(){
		$this->_validation();
		$data = [
			'nama' => htmlspecialchars($this->input->post('nama')),
			'username' => htmlspecialchars($this->input->post('username')),
			'email' => htmlspecialchars($this->input->post('email')),
			'password' => htmlspecialchars($this->input->post('password')),
			'no_telp' => htmlspecialchars($this->input->post('no_telp')),
			'alamat' => htmlspecialchars($this->input->post('alamat')),
			'role' => htmlspecialchars($this->input->post('role')),
		];

		if($this->User_model->change(array('id' => $this->input->post('id')), $data) > 0){
			$toast_button['status'] = 'success';
		} else {
			$toast_button['status'] = 'failed';
		}
		echo json_encode($toast_button);
	}

	public function delete($id){
		if($this->User_model->delete($id) > 0){
			$toast_button['status'] = 'success';
		} else {
			$toast_button['status'] = 'failed';
		}
		echo json_encode($toast_button);
	}

	public function _validation(){
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = true;

		if($this->input->post('nama') == ''){
			$data['inputerror'][] = 'nama';
			$data['error_string'][] = 'Nama User harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('username') == ''){
			$data['inputerror'][] = 'username';
			$data['error_string'][] = 'Username harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('password') == ''){
			$data['inputerror'][] = 'password';
			$data['error_string'][] = 'Password harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('no_telp') == ''){
			$data['inputerror'][] = 'no_telp';
			$data['error_string'][] = 'Nomor telepon harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('alamat') == ''){
			$data['inputerror'][] = 'alamat';
			$data['error_string'][] = 'Alamat harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('role') == ''){
			$data['inputerror'][] = 'role';
			$data['error_string'][] = 'Role User harap diisi';
			$data['status'] = false;
		}


		if($data['status'] == false){
			echo json_encode($data);
			exit();
		}
	}
}
