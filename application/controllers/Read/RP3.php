<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RP3 extends CI_Controller {


	public function index()
	{
		$this->template->load('static','read/rp3');
	}
}
