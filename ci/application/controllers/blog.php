<?php

class Blog extends CI_Controller 
{
	
	function index()
	{
		$this->load->model('blog1');
		$this->load->helper('url');
		$this->load->helper('form');
		//$this->load->database();
		$data['title'] = 'My Blog Title';
		$data['heading'] = 'My Blog Heading';
		$data['query'] = $this->db->get('entries');
		$this->load->view('blog_view', $data);
		
	}

	function comments()
	{
		$this->load->model('blog1');
		$this->load->helper('url');
		$this->load->helper('form');
		//$this->load->database();

		$data['title'] = 'My Comment Title';
		$data['heading'] = 'My Comment Heading';
		$this->db->where('entry_id', $this->uri->segment(3));
		$data['query'] = $this->db->get('comments');
		$this->load->view('comment_view', $data);
	}

	function comment_insert()
	{
		$this->load->model('blog1');
		$this->load->helper('url');
		$this->load->helper('form');
		//$this->load->database();

		$this->db->insert('comments', $_POST);

		redirect('blog/comments/'.$_POST['entry_id']);

	}


}

?>