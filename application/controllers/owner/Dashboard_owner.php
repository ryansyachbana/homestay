<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_owner extends CI_Controller {

	public function index()
	{
		// if (!$this->session->userdata('owner')) {
		// 	redirect('lowner','refresh');
		// }
		// $data['owner'] = $this->session->userdata("owner");
		$this->load->view('owner/header');
		$this->load->view('owner/index');
		$this->load->view('owner/footer');
	}
	public function logout()
	{
		// $this->session->unset_userdata('username');
		// $this->session->unset_userdata('password');
		session_destroy();
		// $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been log out</div>');
			redirect('landing');
	}

}

/* End of file Dashboard_owner.php */
/* Location: ./application/controllers/owner/Dashboard_owner.php */