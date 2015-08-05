<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->database();
		date_default_timezone_set('Asia/Kolkata');
	}
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->view('manager/home');
	}
	
	public function flashnews(){
	
	$this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a news item';

    $this->form_validation->set_rules('ftitle', 'Title', 'required');
    $this->form_validation->set_rules('fdesc', 'Description', 'required');

    if ($this->form_validation->run() === FALSE)
		{
		
			$this ->load->view('manager/templates/menu');
			$this ->load->view('manager/flash-news');
			$this->load->view('manager/templates/footer');
		
		}
		 else
		{
			$this->User->set_news();
			$this->load->view('news/success');
		}
	
	}
	
}
