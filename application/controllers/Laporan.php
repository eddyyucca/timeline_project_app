<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

 public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('laporan_m');

    }
	public function index()
	{
		$data['data'] = $this->laporan_m->laporan();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard/laporan', $data);
		$this->load->view('template/footer');
	}
}
