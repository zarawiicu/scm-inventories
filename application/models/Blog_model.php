<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog_model extends CI_Model
{
	var $table = 'blog';
	var $column_order = array('id','judul','kategori');
	var $order =  array('id','judul','kategori');

	private function _get_data_query(){
		$this->db->from($this->table);

		//fungsi search
		if(isset($_POST['search']['value'])){
			$this->db->like('id', $_POST['search']['value']);
			$this->db->or_like('judul', $_POST['search']['value']);
			$this->db->or_like('kategori', $_POST['search']['value']);
			$this->db->or_like('link', $_POST['search']['value']);
			
		}
		if(isset($_POST['order'])){
			$this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}else{
			$this->db->order_by('id','ASC');
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
		$this->db->insert('blog', $data);
		return $this->db->affected_rows();
	}

	public function get_kode($id){
		return $this->db->get_where($this->table, ['id' => $id])->row();
	}

	public function change($where, $data){
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete($id){
		$this->db->delete($this->table, ['id' => $id]);
		return $this->db->affected_rows();
	}
}
?>
