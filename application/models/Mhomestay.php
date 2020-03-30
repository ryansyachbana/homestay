<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mhomestay extends CI_Model {

	function simpan_homestay($inputan)
	{
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|JPG';
		$config['max_size']  = '2000';
		$config['max_width']  = '2000';
		$config['max_height']  = '2000';
		
		$this->load->library('upload', $config);
		$upload=$this->upload->do_upload('foto_homestay');
		if($upload){
			$inputan['foto_homestay']=$this->upload->data('file_name');
		}
		$inputan['id_owner'] = $_SESSION['owner']['id_owner'];
		$this->db->insert('homestay', $inputan);
	}

	function hapus($id)
 	{
		$this->db->where('id_homestay', $id);
		$this->db->delete('homestay');
	}

	function ambil_satu_data($id)
 	{
		$this->db->where('id_homestay', $id);
		$query=$this->db->get('homestay');
		$data=$query->row_array();
		// row_array digunakan untuk mengambil hanya 1 baris
		return $data;
	}
	
	function tampil_homestay()
	{
		$this->db->order_by('id_homestay', 'desc');
		$query=$this->db->get('homestay');
		$data=$query->result_array();
		return $data;
	}

	function tampil_homestay_backpacker()
	{
		$this->db->order_by('id_homestay');
		$this->db->where('id_kategori_homestay', '1');
		$query=$this->db->get('homestay');
		$data=$query->result_array();
		return $data;
	}

	function detail_homestay($id_homestay)
	{
		$this->db->where('id_homestay', $id_homestay);
		$query = $this->db->get('homestay');
		return $data_array = $query->row_array();
	}

	function tampil_destinasi_homestay($id_destinasi_wisata)
	{
		$this->db->where('id_destinasi_wisata', $id_destinasi_wisata);
		$this->db->where('id_kategori_homestay', '2');
		$query = $this->db->get('homestay');
		return $data = $query->result_array();
	}

}

/* End of file Mhomestay.php */
/* Location: ./application/models/Mhomestay.php */