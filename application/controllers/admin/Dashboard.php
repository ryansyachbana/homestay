<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		if (!$this->session->userdata('admin')) {
			redirect('ladmin','refresh');
		}
		$data['admin'] = $this->session->userdata("admin");
		$this->load->view('admin/header');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
	}
	public function logout()
	{
		// $this->session->unset_userdata('username');
		// $this->session->unset_userdata('password');
		session_destroy();
		// echo "<script>alert('you have been log out');</script>";
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been log out</div>');
			redirect('landing');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/admin/Dashboard.php */