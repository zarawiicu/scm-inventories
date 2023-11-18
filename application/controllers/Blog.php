<?php
class Blog extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->model('Blog_model');
    }

	function index(){
		$this->load->view('blog');
	}

	public function get_data(){
		$list = $this->Blog_model->get_datatable();
		$data = [];
		$no = $_POST['start'];
		foreach ($list as $item){
			$row = array();
			$no++;
			$row[] = $no;
			$row[] = $item->id;
			$row[] = $item->judul;
			$row[] = $item->kategori;
			$row[] = $item->link;
			$row[] = '
				<a href="#" class="btn btn-sm" onclick="get_kode('."'".$item->id."', 'edit'".')"><i class="ti ti-edit"></i></a>
				<a href="#" class="btn btn-sm" onclick="get_kode('."'".$item->id."', 'delete'".')"><i class="ti ti-trash"></i></a>
			';

			$data[] = $row;
		}

		$output = [
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->Blog_model->count_all(),
			"recordsFiltered" => $this->Blog_model->count_filtered(),
			"data" => $data,
		];

		echo json_encode($output);
	}

	public function create(){
		$this->_validation();
		$data = [
			'id' => htmlspecialchars($this->input->post('id')),
			'judul' => htmlspecialchars($this->input->post('judul')),
			'kategori' => htmlspecialchars($this->input->post('kategori')),
			'link' => htmlspecialchars($this->input->post('link')),
		];
		
		$insert = $this->Blog_model->add($data);
		if($insert > 0){
			$toast_button['status'] = 'success';
		} else {
			$toast_button['status'] = 'failed';
		}
		
		echo json_encode($toast_button);
	}

	public function get_kode($id){
		$data = $this->Blog_model->get_kode($id);
		echo json_encode($data);
	}

	public function update(){
		$this->_validation();
		$data = [
			'id' => htmlspecialchars($this->input->post('id')),
			'judul' => htmlspecialchars($this->input->post('judul')),
			'kategori' => htmlspecialchars($this->input->post('kategori')),
			'link' => htmlspecialchars($this->input->post('link')),
		];

		if($this->Blog_model->change(array('id' => $this->input->post('id')), $data) > 0){
			$toast_button['status'] = 'success';
		} else {
			$toast_button['status'] = 'failed';
		}
		echo json_encode($toast_button);
	}

	public function delete($id){
		if($this->Blog_model->delete($id) > 0){
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
			$data['error_string'][] = 'Harap mengisi ID';
			$data['status'] = false;
		}

		if($this->input->post('judul') == ''){
			$data['inputerror'][] = 'judul';
			$data['error_string'][] = 'Harap mengisi Judul';
			$data['status'] = false;
		}

		if($this->input->post('kategori') == ''){
			$data['inputerror'][] = 'kategori';
			$data['error_string'][] = 'Harap mengisi Kategori';
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
