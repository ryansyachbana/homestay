<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {
	
function tampil_user(){
		$this->db->order_by('id_user', 'desc');
		$query=$this->db->get('user');
		$data=$query->result_array();
		return $data;

	}
	
}

/* End of file Muser.php */
/* Location: ./application/models/Muser.php */