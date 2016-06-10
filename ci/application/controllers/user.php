<?php

class User extends CI_Controller
{
	function insert()
	{
		$this->load->model("test_m");

		$arr = array("uname"=>"tianjingyun", "upass"=>"1989");

		$this->test_m->user_insert($arr);

	}

	function del()
	{
		$this->load->model("test_m");
		$this->test_m->user_del('shihongji');
	}

	function select()
	{
		$this->load->model("test_m");
		$user=$this->test_m->user_select('tianjingyun');

	}

}
?>