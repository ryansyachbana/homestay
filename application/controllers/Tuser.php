<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tuser extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mhomestay');
		$this->load->model('Mowner');
		$this->load->model('Mdestinasi');

	}

	public function index()
	{
		if (!$this->session->userdata('user')) {
			redirect('luser','refresh');
		}
		$data['cek']=$this->Mowner->cek_nama_owner($_SESSION['user']['nama_user']);
		$data['homestay']=$this->Mhomestay->tampil_homestay_backpacker();
		$data['destinasi']=$this->Mdestinasi->tampil_destinasi();
		$this->load->view('tampilan_akun', $data);		
	}
	public function logout()
	{
		 // $this->session->unset_userdata('username');
		 // $this->session->unset_userdata('password');
		session_destroy();
		redirect('landing');
		// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been log out</div>');

	}
	

}

/* End of file Tuser.php */
/* Location: ./application/controllers/Tuser.php */