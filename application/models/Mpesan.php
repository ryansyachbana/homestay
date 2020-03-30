<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpesan extends CI_Model {

	function tampil_pemesanan()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('homestay', 'homestay.id_homestay = user.id_user');
		$query = $this->db->get();
		return $query->result();
	}
	

}

/* End of file Mpesan.php */
/* Location: ./application/models/Mpesan.php */