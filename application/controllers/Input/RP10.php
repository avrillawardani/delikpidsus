<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RP10 extends CI_Controller {


	public function index()
	{
		$this->template->load('static','input/rp10');
	}
}
