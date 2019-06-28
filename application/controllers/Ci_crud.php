<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ci_crud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('crud_model');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{
		//test view
		$data = array(
			'hasil' => $this->crud_model->lihat()->result()
			);
		$this->load->view('crud/lihat', $data);
	}

	public function add($value='')
	{
		# code...
		$this->load->view('crud/tambah');
	}

	public function add_aksi($value='')
	{
		# code...
		$nama = $this->input->post("inputNama");
		$alamat = $this->input->post("inputAlamat");
		$no_hp = $this->input->post("inputHp");
		$data = array(
			'nama'=> $nama,
			'alamat' => $alamat,
			'no_hp'=> $no_hp
			);
		$query = $this->crud_model->add_data($data);
		if ($query > 0) {
			$alert = '<div class="alert alert-info" role="alert">
			simpan berhasil
			</div>';
		}
		else{
			$alert = '<div class="alert alert-danger" role="alert">
			simpan gagal
			</div>';
		}
		$this->session->set_flashdata('item', $alert);
		redirect('ci_crud/add','refresh');
	}

	public function edit($id)
	{
		$q = $this->crud_model->lihat(['id'=>$id])->row();
		$data = array('hasil'=>$q);
		$this->load->view('crud/edit', $data);
	}

	public function edit_aksi($value='')
	{
		# code...
		$id = $this->input->post("id");
		$nama = $this->input->post("inputNama");
		$alamat = $this->input->post("inputAlamat");
		$no_hp = $this->input->post("inputHp");
		$data = array(
			'nama'=> $nama,
			'alamat' => $alamat,
			'no_hp'=> $no_hp
			);
		$query = $this->crud_model->edit_data($id, $data);
		if ($query > 0) {
			$alert = '<div class="alert alert-info" role="alert">
			update berhasil
			</div>';
		}
		else{
			$alert = '<div class="alert alert-danger" role="alert">
			update gagal
			</div>';
		}
		$this->session->set_flashdata('item', $alert);
		redirect('ci_crud/edit/'.$id,'refresh');
	}

	public function delete($id)
	{
		$query = $this->crud_model->delete_data($id);
		if ($query > 0) {
			$alert = '<div class="alert alert-info" role="alert">
			delete berhasil
			</div>';
		}
		else{
			$alert = '<div class="alert alert-danger" role="alert">
			delete gagal
			</div>';
		}
		$this->session->set_flashdata('item', $alert);
		redirect('ci_crud','refresh');
	}

}

/* End of file Ci_crud.php */
/* Location: ./application/controllers/Ci_crud.php */