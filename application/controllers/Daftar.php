<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mdaftar');
	}
	public function index()
	{
		//mengambil inputan dari formulir
		$input = $this->input->post();
		if ($input) {
			$this->Mdaftar->simpan($input);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! your account has been created. please login</div>');
			redirect('luser','refresh');
		}
		$this->load->view('daftar_akun');
	}
	

}

/* End of file Daftar.php */
/* Location: ./application/controllers/Daftar.php */