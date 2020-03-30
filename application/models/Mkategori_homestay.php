<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mkategori_homestay extends CI_Model {

	function tampil_kategori_homestay()
	{
		$query=$this->db->get('kategori_homestay');
		$data=$query->result_array();
		return $data;
	}	

}

/* End of file Mkategori_homestay.php */
/* Location: ./application/models/Mkategori_homestay.php */