<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('M_Admin');
		$this->load->library('form_validation');
	}

	public function index()
	{
		if ($this->session->userdata('isLogin')==TRUE) {
			if ($_SESSION['level']=='admin') {
				redirect('Read/Rp1');
			}
			
			else {
				redirect('Login');
			}
		}
		

		else {
			$this->load->view('Login');
		}
	} 

	public function do_login() {
			
			$username=$this->input->post('username', true);
			$password=$this->input->post('password', true);
			$cek=$this->M_Admin->proses_login($username,$password);
			if (count($cek) > 0)
			{
				$datauser=$this->db->get_where('admin', array('username' => $username, 'password' => $password))->row();
				redirect('Read/RP1');	
						
			}
			else
			{

				$this->session->set_flashdata('alert', 'username atau password yang anda masukkan salah');
				redirect('Login');
				
			}

		}

	public function logout()
			{
				$this->session->sess_destroy();
				redirect('Login');
			}
}
