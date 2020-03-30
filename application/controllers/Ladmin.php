<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ladmin extends CI_Controller {

	public function index()
	{
		$this->load->model('Mlogin');
		$input = $this->input->post();
		if($input)
		{
			$hasil = $this->Mlogin->login_admin($input);
			if ($hasil=="sukses") {
				redirect('admin/dashboard','refresh');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Valid! Silahkan Coba Lagi!</div>');
				redirect('ladmin','refresh');
			
			}
		}
		$this->load->view('login_admin');
	}

}

/* End of file Ladmin.php */
/* Location: ./application/controllers/Ladmin.php */