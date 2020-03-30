<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

	function login_admin($input)
	{
		$password = sha1($input['password']);
		$this->db->where('username', $input['username']);
		$this->db->where('password', $password);
		$ambil = $this->db->get('admin');

		//hitung $ambil
		$cek = $ambil->num_rows();
		if ($cek==1) {
			$this->session->set_userdata('admin', $ambil->row_array());
			return "sukses";
		}else{
			return "gagal";
		}
	}

	function login_user($input)
	{
		$password = sha1($input['password']);
		$this->db->where('username', $input['username']);
		$this->db->where('password', $password);
		$ambil = $this->db->get('user');

		//hitung $ambil
		$cek = $ambil->num_rows();
		if ($cek > 0) {
			$akun=$ambil->row_array();
			$this->session->set_userdata('user', $akun);
			return "sukses";
		}else{
			return "gagal";
		}
	}

	function login_owner($input)
	{
		$password = sha1($input['password']);
		$this->db->where('username', $input['username']);
		$this->db->where('password', $password);
		$ambil = $this->db->get('owner');

		//hitung $ambil
		$cek = $ambil->num_rows();
		if ($cek==1) {
			$this->session->set_userdata('owner', $ambil->row_array());
			return "sukses";
		}else{
			return "gagal";
		}
	}
	

}

/* End of file Mlogin.php */
/* Location: ./application/models/Mlogin.php */