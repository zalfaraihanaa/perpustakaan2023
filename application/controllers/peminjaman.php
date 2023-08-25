<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {
	public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('download');
	$this->load->library('pagination');
	$this->load->helper('cookie');
	$this->load->model('anggota_model');
	$this->load->model('buku_model');
	$this->load->model('peminjaman_model');
  }
	
	public function index()
	{
		$data['title'] = 'Peminjaman';
		$data['pinjam'] = $this->peminjaman_model->dataJoin()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('peminjaman/index');
		$this->load->view('templates/footer');
	}


	

}