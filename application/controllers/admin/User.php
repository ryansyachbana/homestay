<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	 public function __construct()
	{
		parent::__construct();
		$this->load->model('Muser');
	}
	public function index()
	{
		$data['admin'] = $this->session->userdata("admin");
		$data['user']=$this->Muser->tampil_user();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/user', $data);
		$this->load->view('admin/footer');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/admin/User.php */