<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RP7 extends CI_Controller {


	public function index()
	{
		$this->template->load('static','read/rp7');
	}
}
