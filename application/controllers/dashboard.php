<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function index()
	{
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->view('manager/dashboard');
	}
	
	
	
}
