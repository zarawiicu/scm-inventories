<?php
class Contract extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->model('Contract_model');
		$this->load->library('upload');
	}

	function index(){
		$this->load->view('contract');
	}

	public function get_data(){
		$list = $this->Contract_model->get_datatable();
		$data = [];
		$no = $_POST['start'];
		foreach ($list as $item){
			$row = array();
			$no++;
			$row[] = $no;
			$row[] = $item->id;
			$row[] = $item->nama_clien;
			$row[] = $item->tgl_mulai;
			$row[] = $item->tgl_akhir;
			$row[] = $item->file;
			$row[] = '
				<a href="#" class="btn btn-sm" onclick="get_kode('."'".$item->id."', 'view'".')"><i class="ti ti-eye"></i></a>
				<a href="#" class="btn btn-sm" onclick="get_kode('."'".$item->id."', 'edit'".')"><i class="ti ti-edit"></i></a>
				<a href="#" class="btn btn-sm" onclick="get_kode('."'".$item->id."', 'delete'".')"><i class="ti ti-trash"></i></a>
			';

			$data[] = $row;
		}

		$output = [
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->Contract_model->count_all(),
			"recordsFiltered" => $this->Contract_model->count_filtered(),
			"data" => $data,
		];

		echo json_encode($output);
	}

	public function create(){
		$this->_validation();
		if ($this->input->post() === 'file') {
			$config['upload_path']          = FCPATH.'.upload/flow/';
			$config['allowed_types']        = 'docx|pdf|xls|xlsx';
			$config['max_size']             = 1024;
			$config['file_name']            = $file_name;
			$config['overwrite']            = true;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('file')) {
				$data['error'] = $this->upload->display_errors();
			} else {
				$uploaded_contract = $this->upload->data();

				$data = [
					'id' => htmlspecialchars($this->input->post('id')),
					'nama_clien' => htmlspecialchars($this->input->post('nama_clien')),
					'tgl_mulai' => htmlspecialchars($this->input->post('tgl_mulai')),
					'tgl_akhir' => htmlspecialchars($this->input->post('tgl_akhir')),
					'file' => $uploaded_contract['file_name']
				];
			}
		}
		
		$insert = $this->Contract_model->add($data);
		if($insert > 0){
			$toast_button['status'] = 'success';
		} else {
			$toast_button['status'] = 'failed';
		}
		
		echo json_encode($toast_button);
	}

	public function get_kode($id){
		$data = $this->Contract_model->get_kode($id);
		echo json_encode($data);
	}

	public function update(){
		$this->_validation();
		if ($this->input->post() === 'file') {
			$config['upload_path']          = FCPATH.'/upload/flow/';
			$config['allowed_types']        = 'docx|pdf|xls|xlsx';
			$config['max_size']             = 1024;
			$config['file_name']            = $file_name;
			$config['overwrite']            = true;

			$this->load->library('upload', $config);

			if (!$this->upload->do_upload('file')) {
				$data['error'] = $this->upload->display_errors();
			} else {
				$uploaded_contract = $this->upload->data();

				$data = [
					'id' => htmlspecialchars($this->input->post('id')),
					'nama_clien' => htmlspecialchars($this->input->post('nama_clien')),
					'tgl_mulai' => htmlspecialchars($this->input->post('tgl_mulai')),
					'tgl_akhir' => htmlspecialchars($this->input->post('tgl_akhir')),
					'file' => $uploaded_contract['file_name']
				];
			}
		}
		if($this->Contract_model->change(array('id' => $this->input->post('id')), $data) > 0){
			$toast_button['status'] = 'success';
		} else {
			$toast_button['status'] = 'failed';
		}
		echo json_encode($toast_button);
	}

	public function delete($id){
		if($this->Contract_model->delete($id) > 0){
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
			$data['error_string'][] = 'is kontrak  harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('nama_clien') == ''){
			$data['inputerror'][] = 'nama_clien';
			$data['error_string'][] = 'Nama clien harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('tgl_mulai') == ''){
			$data['inputerror'][] = 'tgl_mulai';
			$data['error_string'][] = 'Tanggal mulai kontrak harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('tgl_akhir') == ''){
			$data['inputerror'][] = 'tgl_akhir';
			$data['error_string'][] = 'Tanggal akhir kontrak harap diisi';
			$data['status'] = false;
		}

		if($this->input->post('file') == ''){
			$data['inputerror'][] = 'file';
			$data['error_string'][] = 'file kontrak harap diisi';
			$data['status'] = false;
		}


		if($data['status'] == false){
			echo json_encode($data);
			exit();
		}
	}

	
}
