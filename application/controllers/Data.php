<?php
class Data extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->model('Data_model');
		$this->load->library('upload');
    }

	function index(){
		$this->load->view('data');
	}

public function get_data(){
		$list = $this->Data_model->get_datatable();
		$data = [];
		$no = $_POST['start'];
		foreach ($list as $item){
			$row = array();
			$no++;
			$row[] = $no;
			$row[] = $item->kode_data;
			$row[] = $item->nama_data;
			$row[] = $item->deskripsi_data;
			$row[] = $item->tipe_data;
			$row[] = '
				<a href="#" class="btn btn-sm" onclick="_getkode('."'".$item->kode_data."', 'view'".')"><i class="ti ti-eye"></i></a>
				<a href="#" class="btn btn-sm" onclick="_getkode('."'".$item->kode_data."', 'edit'".')"><i class="ti ti-edit"></i></a>
				<a href="#" class="btn btn-sm" onclick="_getkode('."'".$item->kode_data."', 'delete'".')"><i class="ti ti-trash"></i></a>
			';

			$data[] = $row;
		}

		$output = [
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->Data_model->count_all(),
			"recordsFiltered" => $this->Data_model->count_filtered(),
			"data" => $data,
		];

		echo json_encode($output);
	}

	public function add(){
		$this->_validation();
		if ($this->input->post() === 'berkas') {
			$config['upload_path']          = FCPATH.'/upload/flow/';
			$config['allowed_types']        = 'docx|pdf|xls|xlsx';
			$config['max_size']             = 1024;
			$config['file_name']            = $file_name;
			$config['overwrite']            = true;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('berkas')) {
				$data['error'] = $this->upload->display_errors();
			} else {
				$uploaded_data = $this->upload->data();

				$data = [
					'kode_data' => htmlspecialchars($this->input->post('kode_data')),
					'nama_data' => htmlspecialchars($this->input->post('nama_data')),
					'deskripsi_data' => htmlspecialchars($this->input->post('deskripsi_data')),
					'tipe_data' => htmlspecialchars($this->input->post('tipe_data')),
					'berkas_data' => $uploaded_data['file_name'],
					'link_data' => htmlspecialchars($this->input->post('link_data')),
				];
			}
		}
		
		$insert = $this->Data_model->add($data);
		if($insert > 0){
			$toast_button['status'] = 'success';
		} else {
			$toast_button['status'] = 'failed';
		}
		
		echo json_encode($toast_button);
	}

	public function get_kode($kode_data){
		$data = $this->Data_model->_getkode($kode_data);
		echo json_encode($data);
	}

	public function edit(){
		$this->_validation();
		if ($this->input->post() === 'berkas') {
			$config['upload_path']          = FCPATH.'/upload/flow/';
			$config['allowed_types']        = 'docx|pdf|xls|xlsx';
			$config['max_size']             = 1024;
			$config['file_name']            = $file_name;
			$config['overwrite']            = true;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('berkas')) {
				$data['error'] = $this->upload->display_errors();
			} else {
				$uploaded_data = $this->upload->data();

				$data = [
					'kode_data' => htmlspecialchars($this->input->post('kode_data')),
					'nama_data' => htmlspecialchars($this->input->post('nama_data')),
					'deskripsi_data' => htmlspecialchars($this->input->post('deskripsi_data')),
					'tipe_data' => htmlspecialchars($this->input->post('tipe_data')),
					'berkas_data' => $uploaded_data['file_name'],
					'link_data' => htmlspecialchars($this->input->post('link_data')),
				];
			}
		}
		if($this->Data_model->change(array('kode_data' => $this->input->post('kode_data')), $data) > 0){
			$toast_button['status'] = 'success';
		} else {
			$toast_button['status'] = 'failed';
		}
		echo json_encode($toast_button);
	}

	public function delete($kode_data){
		if($this->Data_model->_delete($kode_data) > 0){
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

		if($this->input->post('kode_data') == ''){
			$data['inputerror'][] = 'kode_data';
			$data['error_string'][] = 'Kode data  harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('nama_data') == ''){
			$data['inputerror'][] = 'nama_data';
			$data['error_string'][] = 'Nama data harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('deskripsi_data') == ''){
			$data['inputerror'][] = 'deskripsi_data';
			$data['error_string'][] = 'Deskripsi data harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('tipe_data') == ''){
			$data['inputerror'][] = 'tipe_data';
			$data['error_string'][] = 'Tipe data harap diisi';
			$data['status'] = false;
		}


		if($data['status'] == false){
			echo json_encode($data);
			exit();
		}
	}

	
}
