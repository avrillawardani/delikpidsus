<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RP5 extends CI_Controller {


	public function index()
	{
		$this->template->load('static','read/rp5');
	}
}
