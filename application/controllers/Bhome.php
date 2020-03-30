<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bhome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mhomestay');
		$this->load->model('Mpesan');
		// $this->load->model('Mowner');
	}

	public function index()
	{
		// $data['cek']=$this->Mowner->cek_nama_owner($_SESSION['user']['nama_user']);
		$data['homestay']=$this->Mhomestay->tampil_homestay_backpacker();		
		$this->load->view('backpacker_homestay', $data);		
	}

	public function detail($id_homestay)
	{
		// $data['cek']=$this->Mowner->cek_nama_owner($_SESSION['user']['nama_user']);
		$data = array();
		$data['detail_homestay'] = $this->Mhomestay->detail_homestay($id_homestay);
		$this->load->view('detail_home', $data);
	}

	public function tambah()
	{
		//mengambil inputan dari formulir
		$input = $this->input->post();
		if ($input) {
			$this->Mpesan->simpan_pesanan($input);
			// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">The data has been create!</div>');
			redirect('bhome/detail','refresh');
		}
		$this->load->view('detail_home');
	}
}

/* End of file Bhome.php */
/* Location: ./application/controllers/Bhome.php */