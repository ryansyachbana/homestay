<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mpesan', '', TRUE);
		$this->load->helper(array('url', 'form'));
	}

	public function index()
	{
		$data['pemesanan']=$this->Mpesan->tampil_pemesanan();
		$this->load->view('owner/header');
		$this->load->view('owner/pemesanan', $data);
		$this->load->view('owner/footer');	
	}

}

/* End of file Pemesanan.php */
/* Location: ./application/controllers/owner/Pemesanan.php */