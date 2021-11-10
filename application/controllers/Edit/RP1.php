<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RP1 extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->model('M_RP1');
	}

	public function index($id)
	{
		$where = array('id' =>$id);
		$data['rp1']=$this->M_RP1->editrp1($where,'rp1')->result();
		$this->template->load('static, edit/rp1', $data);
	}

	public function update(){
		$sumber_penerima = $this->input->post('sumber_penerima');
		$isi_ringkas = $this->input->post('isi_ringkas');
		$identitas_terlapor = $this->input->post('identitas_terlapor');
		$pilihan = $this->input->post('pilihan');
		$ket = $this->input->post('ket');

		$data = array(
			'sumber_penerima'   	=> $sumber_penerima,
			'isi_ringkas'	        => $isi_ringkas,
			'identitas_terlapor'	=> $identitas_terlapor,
			'pilihan'	            => $pilihan,
			'ket'	                => $ket,
		);
		$where = array(
			'id' => $id
		);

		$this->M_RP1->updaterp1($where,$data,'rp1');
		redirect('Read/RP1');
	}
}