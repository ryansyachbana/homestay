<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdestinasi extends CI_Model {

	function tampil_destinasi(){
		$this->db->order_by('id_destinasi_wisata', 'desc');
		$query=$this->db->get('destinasi_wisata');
		$data=$query->result_array();
		return $data;

	}

	function simpan_destinasi($inputan)
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
		$config['max_size']  = '2000';
		$config['max_width']  = '2000';
		$config['max_height']  = '2000';
		
		$this->load->library('upload', $config);
		$upload=$this->upload->do_upload('foto_destinasi');
		if($upload){
			$inputan['foto_destinasi']=$this->upload->data('file_name');
		}
		$this->db->insert('destinasi_wisata', $inputan);
	}

	function hapus($id)
 	{
		$this->db->where('id_destinasi_wisata', $id);
		$this->db->delete('destinasi_wisata');
	}

	function ambil_satu_data($id)
 	{
		$this->db->where('id_destinasi_wisata', $id);
		$query=$this->db->get('destinasi_wisata');
		$data=$query->row_array();
		// row_array digunakan untuk mengambil hanya 1 baris
		return $data;
	}

	function edit_destinasi($inputan, $id)
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG|PNG';
		$config['max_size']  = '2000';
		$config['max_width']  = '2000';
		$config['max_height']  = '2000';
		
		$this->load->library('upload', $config);
		
		$upload = $this->upload->do_upload('foto_destinasi');
		//proses upload
		if ($upload) {
			//proses proses file yang dimasukkan
			$inputan['foto_destinasi'] = $this->upload->data('file_name');
			//ambil data file
			$data_destinasi = $this->ambil_satu_data($id);
			// file yang akan di hapus
			$hapus_foto = $data_destinasi['foto_destinasi'];
			//proses hapus file lama di folder
			if (file_exists("./assets/img/$hapus_foto")) {
				unlink("./assets/img/$hapus_foto");
			}
		}

		$this->db->where('id_destinasi_wisata', $id);
		$this->db->update('destinasi_wisata', $inputan);

	}

	function detail_destinasi($id_destinasi_wisata)
	{
		$this->db->where('id_destinasi_wisata', $id_destinasi_wisata);
		$query = $this->db->get('destinasi_wisata');
		return $data_array = $query->row_array();
	}
}

/* End of file Mdestinasi.php */
/* Location: ./application/models/Mdestinasi.php */