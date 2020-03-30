<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destinasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mhomestay');
		$this->load->model('Mowner');
		$this->load->model('Mdestinasi');
	}

	public function homestay($id_destinasi_wisata)
	{
		$data['cek']=$this->Mowner->cek_nama_owner($_SESSION['user']['nama_user']);
		$data['homestay'] = $this->Mhomestay->tampil_homestay();
		$data['destinasi_homestay'] = $this->Mhomestay->tampil_destinasi_homestay($id_destinasi_wisata);
		$data['detail_destinasi'] = $this->Mdestinasi->detail_destinasi($id_destinasi_wisata);
		$this->load->view('destinasi/destinasi', $data);
	}

}

/* End of file Destinasi.php */
/* Location: ./application/controllers/Destinasi.php */