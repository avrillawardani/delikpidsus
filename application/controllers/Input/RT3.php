<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RT3 extends CI_Controller {


	public function index()
	{
		$this->template->load('static','input/rt3');
	}
}
