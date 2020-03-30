<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Luser extends CI_Controller {

	public function index()
	{
		$this->load->model('Mlogin');
		$input = $this->input->post();
		if($input)
		{
			$hasil = $this->Mlogin->login_user($input);
			if ($hasil=="sukses") {
				redirect('tuser','refresh');
			}else{
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Valid!</div>');
				redirect('luser','refresh');
			
			}
		}
		$this->load->view('login_user');
	}
	
}

/* End of file Luser.php */
/* Location: ./application/controllers/Luser.php */