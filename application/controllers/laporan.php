<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('download');
        $this->load->library('pagination');
        $this->load->helper('cookie');
        $this->load->model('peminjaman_model');
        $this->load->model('pengadaan_model');
      }

    public function pengadaan()
    {
      $data['title'] = 'Laporan Pengadaan';

      $this->load->view('templates/header', $data);
      $this->load->view('pengadaan/laporan');
      $this->load->view('templates/footer');
    }

    public function peminjaman()
    {
      $data['title'] = 'Laporan Peminjaman';

      $this->load->view('templates/header', $data);
      $this->load->view('peminjaman/index');
      $this->load->view('templates/footer');
    }


}