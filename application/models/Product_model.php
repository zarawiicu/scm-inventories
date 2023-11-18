<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{
	var $table = 'product';
	var $column_order = array('kode_prod','nama','deskripsi','harga');
	var $order =  array('kode_prod','nama','deskripsi','harga');

	private function _get_data_query(){
		$this->db->from($this->table);

		//fungsi search
		if(isset($_POST['search']['value'])){
			$this->db->like('kode_prod', $_POST['search']['value']);
			$this->db->or_like('nama', $_POST['search']['value']);
			$this->db->or_like('deskripsi', $_POST['search']['value']);
			$this->db->or_like('harga', $_POST['search']['value']);
			
		}
		if(isset($_POST['order'])){
			$this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}else{
			$this->db->order_by('kode_prod','ASC');
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
		$this->db->insert('product', $data);
		return $this->db->affected_rows();
	}

	public function get_kode($kode_prod){
		return $this->db->get_where($this->table, ['kode_prod' => $kode_prod])->row();
	}

	public function change($where, $data){
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete($kode_prod){
		$this->db->delete($this->table, ['kode_prod' => $kode_prod]);
		return $this->db->affected_rows();
	}
}
?>
