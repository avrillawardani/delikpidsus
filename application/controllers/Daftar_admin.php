<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_admin extends CI_Controller {

	
	public function index()
	{
		$this->template->load('static','daftar_admin');
	}
}