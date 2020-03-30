<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datahome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mhomestay');
	}

	public function index()
	{
		$data['datahome']=$this->Mhomestay->tampil_homestay();
		$this->load->view('owner/header');
		$this->load->view('owner/data_home', $data);
		$this->load->view('owner/footer');
	}

	public function hapus($id)
	{
		$this->Mhomestay->hapus($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The data has been delete!</div>');
		redirect('owner/datahome');
	}



}

/* End of file Datahome.php */
/* Location: ./application/controllers/owner/Datahome.php */