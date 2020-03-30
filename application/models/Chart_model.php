<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart_model extends CI_Model {

	function get_data()
	{
		$this->db->select('nama_homestay,harga_homestay');
		$result = $this->db->get('homestay');
		return $result;
	}
	

}

/* End of file Chart_model.php */
/* Location: ./application/models/Chart_model.php */