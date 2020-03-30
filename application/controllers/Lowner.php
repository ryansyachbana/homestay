<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lowner extends CI_Controller {

	public function index()
	{
		$this->load->model('Mlogin');
		$this->load->model('Mowner');
		$input = $this->input->post();
		if($input)
		{
			$cek=$this->Mowner->cek_username($input['username']);
			if ($cek['nama_owner']!=$_SESSION['user']['nama_user']) 
			{
				echo "<script>alert('Data Tidak Valid! Silahkan Coba Lagi!');</script>";
				redirect('lowner','refresh');
			}
			else
			{
				$hasil = $this->Mlogin->login_owner($input);
				if ($hasil=="sukses") {
					redirect('owner/dashboard_owner','refresh');
				}else{
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data Tidak Valid!</div>');
					redirect('lowner','refresh');

				}
			}
			
		}
		$this->load->view('login_owner');
	}

}

/* End of file Lowner.php */
/* Location: ./application/controllers/Lowner.php */