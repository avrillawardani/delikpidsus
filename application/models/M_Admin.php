<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

	public function view_admin()
	{
		$query=$this->db->query("SELECT * FROM admin");
		$isi=$query->result();
		return $isi;
	}

	public function add_admin($username,$password)
	{
		$hsl=$this->db->query("INSERT INTO admin (username, password) VALUES ('$username','$password')");
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
	public function proses_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get('admin')->row();
	}
}