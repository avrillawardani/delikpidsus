<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RB2 extends CI_Controller {


	public function index()
	{
		$this->template->load('static','input/rb2');
	}
}
