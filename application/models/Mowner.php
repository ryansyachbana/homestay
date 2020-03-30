<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mowner extends CI_Model {

	function tampil_owner(){
		$this->db->order_by('id_owner', 'desc');
		$query=$this->db->get('owner');
		$data=$query->result_array();
		return $data;

	}

 	function tambah($post)
 	{
		$this->db->insert('owner', $post);
	}

 	function hapus($id)
 	{
		$this->db->where('id_owner', $id);
		$this->db->delete('owner');
	}

 	function ambil_satu_data($id)
 	{
		$this->db->where('id_owner', $id);
		$query=$this->db->get('owner');
		$data=$query->row_array();
		// row_array digunakan untuk mengambil hanya 1 baris
		return $data;
	}

	function edit($inputan, $id)
	{
		$data = $this->input->post();
		if ($data) {
			$data_owner = $this->ambil_satu_data($id);
		}
		$this->db->where('id_owner', $id);
		$this->db->update('owner', $inputan);

	}

	function cek_nama_owner($nama_user)
	{
		$this->db->where('nama_owner', $nama_user);
		$ambil = $this->db->get('owner');
		$cek=$ambil->num_rows();
		if ($cek==1) 
		{
			return "terdaftar";
		}
		else
		{
			return "tidak terdaftar";
		}
	}
	function cek_username($username)
	{
		$this->db->where('username', $username);
		$ambil = $this->db->get('owner');
		return $ambil->row_array();
	}
	
}

/* End of file Mowner.php */
/* Location: ./application/models/Mowner.php */