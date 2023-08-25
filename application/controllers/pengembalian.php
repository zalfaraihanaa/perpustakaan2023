<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengembalian extends CI_Controller {
	public function __construct() {
    parent::__construct();
    $this->load->helper('url');
    $this->load->helper('download');
	$this->load->library('pagination');
	$this->load->helper('cookie');
	$this->load->model('peminjaman_model');
	$this->load->model('pengembalian_model');
  }
	
	public function index()
	{
		$data['title'] = 'Pengembalian';
		$data['pengembalian'] = $this->pengembalian_model->dataJoin()->result();

		$this->load->view('templates/header', $data);
		$this->load->view('pengembalian/index');
		$this->load->view('templates/footer');
	}

    
}