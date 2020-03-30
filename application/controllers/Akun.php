<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mowner');
		$this->load->model('Mdaftar');
	}

	public function index()
	{
		$data['cek']=$this->Mowner->cek_nama_owner($_SESSION['user']['nama_user']);
		$this->load->view('akun_saya', $data);		
	}

	public function edit($id)
	{
		$data = $this->input->post();
		if ($data) {
			$this->Mdaftar->edit_profil($data, $id);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The data has been update!</div>');
			redirect('akun','refresh');
		}
		$data = array();
		$data['ambil_user'] = $this->Mdaftar->ambil_satu_data($id);
		// digunakan untuk mengambil data import yang mau diedit
		$this->load->view('edit_profil', $data);
	}
	

}

/* End of file Akun.php */
/* Location: ./application/controllers/Akun.php */