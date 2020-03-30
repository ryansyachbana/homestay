<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Droom extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mdestinasi');
		$this->load->model('Mhomestay');
		$this->load->model('Mkategori_homestay');
	}
	public function index()
	{
		$input = $this->input->post();
		if ($input) {
			$this->Mhomestay->simpan_homestay($input);
			// $this->Mhomestay->upload_files($input);
			redirect('owner/droom','refresh');
		}
		$data['owner'] = $this->session->userdata("owner");
		$data['destinasi'] = $this->Mdestinasi->tampil_destinasi();
		$data['kategori_homestay'] = $this->Mkategori_homestay->tampil_kategori_homestay();
		$this->load->view('owner/header', $data);
		$this->load->view('owner/masuk_room', $data);
		$this->load->view('owner/footer');

	}

}

/* End of file Droom.php */
/* Location: ./application/controllers/owner/Droom.php */