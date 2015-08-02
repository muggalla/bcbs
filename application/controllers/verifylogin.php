<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifylogin extends CI_Controller {

    function __construct()
		{
			parent::__construct();
			$this->load->model('user','',TRUE);
		
		}
	
	public function index()
	{
		
		//This method will have the credentials validation
        $this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		
		if($this->form_validation->run() == FALSE)
			{
			//Field validation failed.  User redirected to login page
			
			   $this->load->view('manager/home');
			
			}
			else
			{
			//Go to private area
			// redirect('dashboard', 'refresh');
			  //$this->load->view('manager/dashboard');
			}
					
	}
	
	
	function check_database($password)
		{
		
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');
		
		//query the database
		$result = $this->user->login($username, $password);
		//print_r($result);
			if($result)
			{
				$sess_array = array();
				foreach($result as $row)
				{
				$sess_array = array(
				'id' => $row->id,
				'username' => $row->username
				);
				$this->session->set_userdata('logged_in', $sess_array);
				redirect('dashboard');
			}
		return TRUE;
			}
			else
			{
				$this->form_validation->set_message('check_database', 'Invalid username or password');
				return false;
			}
		}
	
	
	 public function logout()

    {

                     $session = array(
                     'id' => '-1',
                     'username' => ''
                     );
               $this->session->set_userdata('logged_in', FALSE);
               $this->session->sess_destroy(); 
               $this->index();

    }
	
}
