<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Send_email extends CI_Controller {

    /**
     * Kirim email dengan SMTP Gmail.
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Muser');
        $this->load->model('Mhomestay');
    }

    public function detail($id_homestay)
    {
        $ambil = $this->Mhomestay->detail_homestay($id_homestay);
      // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'ryansyachbana719@gmail.com',  // Email gmail
            'smtp_pass'   => 'Ryan2611',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];

        // Load library email dan konfigurasinya
        $this->load->library('email', $config);

        // Email dan nama pengirim
        $this->email->from('ryansyachbana719@gmail.com', 'LUNNO');

        // Email penerima
        $this->email->to($_SESSION['user']['email']); // Ganti dengan email tujuan

        // Lampiran email, isi dengan url/path file
        $this->email->attach('assets/img/pemesananberhasil.PNG');

        // Subject email
        $this->email->subject('Detail Pembayaran');

        // Isi email
        // $this->email->message("Pemesanan Berhasil! Silahkan lakukan pembayaran, batas waktu pembayaran 12 jam dari sekarang");
        $this->email->message("Pemesanan".' '.$ambil['nama_homestay'].' '."Berhasil! Silahkan lakukan pembayaran, batas waktu pembayaran 12 jam dari sekarang.");

        // Tampilkan pesan sukses atau error
        if ($this->email->send()) {
            // echo 'Sukses! email berhasil dikirim.';
            // echo "<script>alert('Pemesanan Berhasil! Silahkan lakukan pembayaran.');</script>";
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pemesanan berhasil! Silahkan lakukan pembayaran.</div>');
            redirect('bhome/detail/'.$id_homestay,'refresh');
        } else {
            echo 'Error! email tidak dapat dikirim.';
        }
    }
}