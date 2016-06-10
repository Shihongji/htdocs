<?php

class Blog1 extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
}