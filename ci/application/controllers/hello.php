<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

	function sayhello($name, $name2) {
		echo $name." Hello Shihongji.".$name2;
	}
}
