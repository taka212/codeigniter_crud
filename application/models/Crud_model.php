<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud_model extends CI_Model {

	//fungsi untuk menampilkan data
	public function lihat($value=array())
	{
		$this->db->where($value);
		$data = $this->db->get('biodata');
		return $data;
	}

	public function add_data($value)
	{
		# code...
		$this->db->insert('biodata', $value);
		return $this->db->affected_rows();
	}

	public function edit_data($id, $data)
	{
		$this->db->update('biodata', $data, ['id'=>$id]);
		return $this->db->affected_rows();
	}

	public function delete_data($id)
	{
		$this->db->delete('biodata',['id'=>$id]);
		return $this->db->affected_rows();
	}

}

/* End of file Crud_model.php */
/* Location: ./application/models/Crud_model.php */