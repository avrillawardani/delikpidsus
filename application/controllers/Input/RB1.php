<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RB1 extends CI_Controller {


	public function index()
	{
		$this->template->load('static','input/rb1');
	}
}
