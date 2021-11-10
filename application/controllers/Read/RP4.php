<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RP4 extends CI_Controller {


	public function index()
	{
		$this->template->load('static','read/rp4');
	}
}
