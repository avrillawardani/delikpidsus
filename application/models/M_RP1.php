<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_RP1 extends CI_Model {

	public function view_rp1()
	{
		$query=$this->db->query("SELECT * FROM rp1");
		$isi=$query->result();
		return $isi;
	}

	public function add_rp1($sumber_penerima,$isi_ringkas,$identitas_terlapor,$pilihan,$ket)
	{
		$hsl=$this->db->query("INSERT INTO rp1 (sumber_penerima, isi_ringkas, identitas_terlapor, pilihan, ket) VALUES ('$sumber_penerima','$isi_ringkas','$identitas_terlapor','$pilihan','$ket')");
		return $hsl;
	}

	 public function get_all()
    {
        return $this->db->get("rp1");
    }

    public function editrp1($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	public function updaterp1($where,$data,$table) {
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}