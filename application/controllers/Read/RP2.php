<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RP2 extends CI_Controller {

	public function __construct() {

	parent::__construct();
		
		$this->load->model('M_RP2');
	}


	public function index()
	{
		$data['rp2']=$this->M_RP2->view_rp2('rp2');
		$this->template->load('static','read/rp2', $data);
	}
}
