<?php
class Product extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
		$this->load->model('Product_model');
    }

	function index(){
		$this->load->view('product');
	}

	public function get_data(){
		$list = $this->Product_model->get_datatable();
		$data = [];
		$no = $_POST['start'];
		foreach ($list as $item){
			$row = array();
			$no++;
			$row[] = $no;
			$row[] = $item->kode_prod;
			$row[] = $item->nama;
			$row[] = $item->deskripsi;
			$row[] = $item->harga;
			$row[] = $item->link;
			$row[] = '
			<a href="#" class="btn btn-sm" onclick="get_kode('."'".$item->kode_prod."', 'view'".')"><i class="ti ti-eye"></i></a>
				<a href="#" class="btn btn-sm" onclick="get_kode('."'".$item->kode_prod."', 'edit'".')"><i class="ti ti-edit"></i></a>
				<a href="#" class="btn btn-sm" onclick="get_kode('."'".$item->kode_prod."', 'delete'".')"><i class="ti ti-trash"></i></a>
			';

			$data[] = $row;
		}

		$output = [
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->Product_model->count_all(),
			"recordsFiltered" => $this->Product_model->count_filtered(),
			"data" => $data,
		];

		echo json_encode($output);
	}

	public function create(){
		$this->_validation();
		$data = [
			'kode_prod' => htmlspecialchars($this->input->post('kode_prod')),
			'nama' => htmlspecialchars($this->input->post('nama')),
			'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
			'tgl_prod' => htmlspecialchars($this->input->post('tgl_prod')),
			'harga' => htmlspecialchars($this->input->post('harga')),
			'link' => htmlspecialchars($this->input->post('link')),
		];
		
		$insert = $this->Product_model->add($data);
		if($insert > 0){
			$toast_button['status'] = 'success';
		} else {
			$toast_button['status'] = 'failed';
		}
		
		echo json_encode($toast_button);
	}

	public function get_kode($kode_prod){
		$data = $this->Product_model->get_kode($kode_prod);
		echo json_encode($data);
	}

	public function update(){
		$this->_validation();
		$data = [
			'kode_prod' => htmlspecialchars($this->input->post('kode_prod')),
			'nama' => htmlspecialchars($this->input->post('nama')),
			'deskripsi' => htmlspecialchars($this->input->post('deskripsi')),
			'tgl_prod' => htmlspecialchars($this->input->post('tgl_prod')),
			'harga' => htmlspecialchars($this->input->post('harga')),
			'link' => htmlspecialchars($this->input->post('link')),
		];

		if($this->Product_model->change(array('kode_prod' => $this->input->post('kode_prod')), $data) > 0){
			$toast_button['status'] = 'success';
		} else {
			$toast_button['status'] = 'failed';
		}
		echo json_encode($toast_button);
	}

	public function delete($kode_prod){
		if($this->Product_model->delete($kode_prod) > 0){
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

		if($this->input->post('kode_prod') == ''){
			$data['inputerror'][] = 'kode_prod';
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
