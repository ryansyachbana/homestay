<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Owner extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mowner');
	}
	public function index()
	{
		$data['owner']=$this->Mowner->tampil_owner();
		$this->load->view('admin/header');
		$this->load->view('admin/owner', $data);
		$this->load->view('admin/footer');
	}

	public function hapus($id)
	{
		$this->Mowner->hapus($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The data has been delete!</div>');
		redirect('admin/owner');
	}

	public function edit($id)
	{
		$data = $this->input->post();
		if ($data) {
			$this->Mowner->edit($data, $id);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The data has been update!</div>');
			redirect('admin/owner','refresh');
		}
		$data = array();
		$data['ambil_owner'] = $this->Mowner->ambil_satu_data($id);
		// digunakan untuk mengambil data import yang mau diedit
		$this->load->view('admin/header', $data);
		$this->load->view('admin/edit_owner', $data);
		$this->load->view('admin/footer');
	}

}

/* End of file Owner.php */
/* Location: ./application/controllers/admin/Owner.php */