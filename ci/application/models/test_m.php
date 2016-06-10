<?php

class Test_m extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function user_insert($arr)
	{
		$this->db->insert('user', $arr);
	}

	function user_update()
	{
		$this->db->where('uid', $id);
		$this->db->update('user',$arr);
	}

	function user_del($name)
	{
		$this->db->where("uname", $name);
		$this->db->delete('user');
	}

	function user_select($id)
	{
		$this->db->where('uname', $name);
		$this->db->select('*');
		$query=$this->db->get('user');
		return $query->result();
	}
}
?>