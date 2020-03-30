<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destinasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mdestinasi');
	}
	public function index()
	{
		
		$data['destinasi']=$this->Mdestinasi->tampil_destinasi();
		$this->load->view('admin/header');
		$this->load->view('admin/destinasi', $data);
		$this->load->view('admin/footer');
	}

	public function tambah()
	{
		//mengambil inputan dari formulir
		$input = $this->input->post();
		if ($input) {
			$this->Mdestinasi->simpan_destinasi($input);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The data has been create!</div>');
			redirect('admin/destinasi','refresh');
		}
		$this->load->view('admin/header');
		$this->load->view('admin/tambah_destinasi');
		$this->load->view('admin/footer');
	}

	public function hapus($id)
	{
		$this->load->model('Mdestinasi');
		$this->Mdestinasi->hapus($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The data has been delete!</div>');
		redirect('admin/destinasi');
	}

	public function edit($id)
	{
		$data['admin'] = $this->session->userdata("admin");
		$data = $this->input->post();
		if ($data) {
			$this->Mdestinasi->edit_destinasi($data, $id);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The data has been update!</div>');
			redirect('admin/destinasi','refresh');
		}
		$data = array();
		$data['ambil_destinasi'] = $this->Mdestinasi->ambil_satu_data($id);
		// digunakan untuk mengambil data import yang mau diedit
		$this->load->view('admin/header', $data);
		$this->load->view('admin/edit_destinasi', $data);
		$this->load->view('admin/footer');
	}

}

/* End of file Destinasi.php */
/* Location: ./application/controllers/admin/Destinasi.php */