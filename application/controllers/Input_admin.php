<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_admin extends CI_Controller {

	
	public function index()
	{
		$this->template->load('static','input_admin');
	}
}
