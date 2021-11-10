<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_RP2 extends CI_Model {

	public function view_rp2()
	{
		$query=$this->db->query("SELECT * FROM rp2");
		$isi=$query->result();
		return $isi;
	}

	/*public function add_rp2($sumber_penerima,$isi_ringkas,$identitas_terlapor,$pilihan,$ket)
	{
		$hsl=$this->db->query("INSERT INTO rp2 (sumber_penerima, isi_ringkas, identitas_terlapor, pilihan, ket) VALUES ('$sumber_penerima','$isi_ringkas','$identitas_terlapor','$pilihan','$ket')");
		return $hsl;
	}

	 public function get_all()
    {
        return $this->db->get("rp2");
    }

    public function editrp2($where,$table)
	{
		return $this->db->get_where($table,$where);
	}

	public function updaterp2($where,$data,$table) {
		$this->db->where($where);
		$this->db->update($table,$data);
	}*/
}