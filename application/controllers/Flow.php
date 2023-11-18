<?php
class Flow extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Flow_model');
	}

	function index()
	{
		$this->load->view('flow');
	}

	public function get_data()
	{
		$list = $this->Flow_model->get_datatable();
		$data = [];
		$no = $_POST['start'];
		foreach ($list as $item) {
			$row = array();
			$no++;
			$row[] = $no;
			$row[] = $item->kode;
			$row[] = $item->nama;
			$row[] = $item->deskripsi;
			$row[] = $item->tipe;
			$row[] = '
				<a href="#" class="btn btn-sm" onclick="get_kode(' . "'" . $item->kode . "', 'view'" . ')"><i class="ti ti-eye"></i></a>
				<a href="#" class="btn btn-sm" onclick="get_kode(' . "'" . $item->kode . "', 'edit'" . ')"><i class="ti ti-edit"></i></a>
				<a href="#" class="btn btn-sm" onclick="get_kode(' . "'" . $item->kode . "', 'delete'" . ')"><i class="ti ti-trash"></i></a>
			';

			$data[] = $row;
		}

		$output = [
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->Flow_model->count_all(),
			"recordsFiltered" => $this->Flow_model->count_filtered(),
			"data" => $data,
		];

		echo json_encode($output);
	}

	public function create()
	{
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
				$uploaded_flow = $this->upload->data();

				$data = [
					'kode' => htmlspecialchars($this->input->post('kode')),
					'nama' => htmlspecialchars($this->input->post('nama')),
					'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
					'tipe' => htmlspecialchars($this->input->post('tipe')),
					'berkas' => $uploaded_flow['file_name'],
					'link' => htmlspecialchars($this->input->post('link')),
				];
			}
		}

		$insert = $this->Flow_model->add($data);

		if ($insert > 0) {
			$toast_button['status'] = 'success';
		} else {
			$toast_button['status'] = 'failed';
		}

		echo json_encode($toast_button);
	}

	public function get_kode($kode)
	{
		$data = $this->Flow_model->get_kode($kode);
		echo json_encode($data);
	}

	public function update()
	{
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
				$uploaded_flow = $this->upload->data();

				$data = [
					'kode' => htmlspecialchars($this->input->post('kode')),
					'nama' => htmlspecialchars($this->input->post('nama')),
					'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
					'tipe' => htmlspecialchars($this->input->post('tipe')),
					'berkas' => $uploaded_flow['file_name'],
					'link' => htmlspecialchars($this->input->post('link')),
				];
			}
		}

		if ($this->Flow_model->change(array('kode' => $this->input->post('kode')), $data) > 0) {
			$toast_button['status'] = 'success';
		} else {
			$toast_button['status'] = 'failed';
		}
		echo json_encode($toast_button);
	}

	public function delete($kode)
	{
		if ($this->Flow_model->delete($kode) > 0) {
			$toast_button['status'] = 'success';
		} else {
			$toast_button['status'] = 'failed';
		}
		echo json_encode($toast_button);
	}

	public function _validation()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = true;

		if ($this->input->post('kode') == '') {
			$data['inputerror'][] = 'kode';
			$data['error_string'][] = 'Kode flow  harap diisi';
			$data['status'] = false;
		}

		if ($this->input->post('nama') == '') {
			$data['inputerror'][] = 'nama';
			$data['error_string'][] = 'Nama flow harap diisi';
			$data['status'] = false;
		}

		if ($this->input->post('deskripsi') == '') {
			$data['inputerror'][] = 'deskripsi';
			$data['error_string'][] = 'Deskripsi flow harap diisi';
			$data['status'] = false;
		}

		if ($this->input->post('tipe') == '') {
			$data['inputerror'][] = 'tipe';
			$data['error_string'][] = 'Tipe flow harap diisi';
			$data['status'] = false;
		}


		if ($data['status'] == false) {
			echo json_encode($data);
			exit();
		}
	}
}
