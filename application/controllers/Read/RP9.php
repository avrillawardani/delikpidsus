<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RP9 extends CI_Controller {


	public function index()
	{
		$this->template->load('static','read/rp9');
	}
}
