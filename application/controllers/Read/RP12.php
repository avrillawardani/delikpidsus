<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RP12 extends CI_Controller {

	/*public function __construct() {

	parent::__construct();
		
		$this->load->model('M_RP1');
		
	}*/


	public function index()
	{

		/*$data['rp1']=$this->M_RP1->view_rp1('rp1');*/
		$this->template->load('static','read/rp12');
	}

}
