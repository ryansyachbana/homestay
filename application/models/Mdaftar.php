<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdaftar extends CI_Model {

	function simpan($inputan)
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
		$config['max_size']  = '2000';
		$config['max_width']  = '2000';
		$config['max_height']  = '2000';
		
		$this->load->library('upload', $config);
		$upload=$this->upload->do_upload('foto_user');
		if($upload){
			$inputan['foto_user']=$this->upload->data('file_name');
		}
		$inputan['password'] = sha1($inputan['password']);
		$this->db->insert('user', $inputan);
	}

	function simpan_owner($inputan)
	{
		$inputan['password'] = sha1($inputan['password']);
		$this->db->insert('owner', $inputan);
	}

	function ambil_satu_data($id)
 	{
		$this->db->where('id_user', $id);
		$query=$this->db->get('user');
		$data=$query->row_array();
		// row_array digunakan untuk mengambil hanya 1 baris
		return $data;
	}

	function edit_profil($inputan, $id)
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|PNG';
		$config['max_size']  = '2000';
		$config['max_width']  = '2000';
		$config['max_height']  = '2000';
		
		$this->load->library('upload', $config);
		
		$upload = $this->upload->do_upload('foto_user');
		//proses upload
		if ($upload) {
			//proses proses file yang dimasukkan
			$inputan['foto_user'] = $this->upload->data('file_name');
			//ambil data file
			$data_user = $this->ambil_satu_data($id);
			// file yang akan di hapus
			$hapus_foto = $data_user['foto_user'];

			//proses hapus file lama di folder
			if (file_exists("./assets/img/$hapus_foto")) {
				unlink("./assets/img/$hapus_foto");
			}
		}
		$inputan['password'] = sha1($inputan['password']);
		$this->db->where('id_user', $id);
		$this->db->update('user', $inputan);
	}
}

/* End of file Mdaftar.php */
/* Location: ./application/models/Mdaftar.php */