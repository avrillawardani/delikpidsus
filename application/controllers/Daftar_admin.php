<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_admin extends CI_Controller {

	public function __construct() {

	parent::__construct();
		
		$this->load->model('M_Admin');
	}

	public function index()
	{
		$data['admin']=$this->M_Admin->view_admin('admin');
		$this->template->load('static','daftar_admin', $data);
	}
}
