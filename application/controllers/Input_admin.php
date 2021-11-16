<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Input_admin extends CI_Controller {

	public function __construct() {

	parent::__construct();
		
		$this->load->model('M_Admin');
	}
	
	public function index()
	{
		$this->template->load('static','input_admin');
	}
	public function input_admin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($this->M_Admin->add_admin($username,$password))
			{
				redirect('Daftar_admin');
			}

			else 
			{
				redirect('Input_admin');
			}
		}
	
}