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
			$row[] = $item->password;
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
			'id' => htmlspecialchars($this->input->post('id')),
			'nama' => htmlspecialchars($this->input->post('nama')),
			'username' => htmlspecialchars($this->input->post('username')),
			'email' => htmlspecialchars($this->input->post('email')),
			'password' => htmlspecialchars($this->input->post('password')),
			'notelp' => htmlspecialchars($this->input->post('notelp')),
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
			'id' => htmlspecialchars($this->input->post('id')),
			'nama' => htmlspecialchars($this->input->post('nama')),
			'username' => htmlspecialchars($this->input->post('username')),
			'email' => htmlspecialchars($this->input->post('email')),
			'password' => htmlspecialchars($this->input->post('password')),
			'notelp' => htmlspecialchars($this->input->post('notelp')),
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

		if($this->input->post('id') == ''){
			$data['inputerror'][] = 'id';
			$data['error_string'][] = 'Kode Produksi harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('nama') == ''){
			$data['inputerror'][] = 'nama';
			$data['error_string'][] = 'Nama Produk harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('deskripsi') == ''){
			$data['inputerror'][] = 'deskripsi';
			$data['error_string'][] = 'Deskripsi Produk harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('tgl_prod') == ''){
			$data['inputerror'][] = 'tgl_prod';
			$data['error_string'][] = 'Tanggal Produksi harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('harga') == ''){
			$data['inputerror'][] = 'harga';
			$data['error_string'][] = 'Deskripsi Produk harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('link') == ''){
			$data['inputerror'][] = 'link';
			$data['error_string'][] = 'Harap mengisi Link';
			$data['status'] = false;
		}


		if($data['status'] == false){
			echo json_encode($data);
			exit();
		}
	}
}
