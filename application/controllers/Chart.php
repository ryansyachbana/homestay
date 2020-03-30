<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Chart_model');
	}

	public function index()
	{
		$data = $this->Chart_model->get_data()->result();
		$x['data'] = json_encode($data);
		$x['admin'] = $this->session->userdata("admin");
		$this->load->view('admin/header', $x);
		$this->load->view('admin/chart_view', $x);
		$this->load->view('admin/footer');
	}

}

/* End of file Chart.php */
/* Location: ./application/controllers/Chart.php */