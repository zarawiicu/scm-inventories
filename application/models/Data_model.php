<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_model extends CI_Model
{
	var $table = 'data';
	var $column_order = array('kode_data','nama_data','deskripsi_data','tipe_data');
	var $order = array('kode_data','nama_data','deskripsi_data','tipe_data');

	private function _get_data_query(){
		$this->db->from($this->table);

		//fungsi search
		if(isset($_POST['search']['value'])){
			$this->db->like('kode_data', $_POST['search']['value']);
			$this->db->or_like('nama_data', $_POST['search']['value']);
			$this->db->or_like('deskripsi_data', $_POST['search']['value']);
			$this->db->or_like('tipe_data', $_POST['search']['value']);
			
		}
		if(isset($_POST['order'])){
			$this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}else{
			$this->db->order_by('kode_data','ASC');
		}
	}

	public function get_datatable(){
		$this->_get_data_query();
		if($_POST['length'] != - 1){
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get();
		return $query->result();
	}


	//untuk memfilter data
	function count_filtered(){
        $this->_get_data_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

	//menghitung semua data yang ada
    public function count_all(){
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

	public function add($data){
		$this->db->insert('data', $data);
		return $this->db->affected_rows();
	}

	public function get_kode($kode_data){
		return $this->db->get_where($this->table, ['kode_data' => $kode_data])->row();
	}

	public function change($where, $data){
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function _delete($kode_data){
		$this->db->delete($this->table, ['kode_data' => $kode_data]);
		return $this->db->affected_rows();
	}
}
?>
