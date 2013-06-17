<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
       {
       	parent::__construct();
          $this->load->helper('url'); 
       }

	/* function to load login page */
	public function index()
	{
			
		
		$data['css']        = $this->config->item('css');  
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|min_length[5]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('login/Login',$data);
			
		}
		else
		{
			$this->checkUser();
		}
		
		
	}

	/* function to function to check user details */
	public function checkUser()
	{
		$this->load->model('login/checkuser_model');
		$result = $this->checkuser_model->checkUser();
		if($result != "Not Available")
		{
			$fname =$result->first_name;
			$lname =$result->last_name;
			$data = array("fname" => $fname, "lname" => $lname);
			$this->load->view('login/Success',$data);
		}
		else
		{
			echo "Wrong User name or Password";
			//$this->index();
		}

	}

	/* function for forgot password */
	public function forgotPassword()
	{
		$data['css']        = $this->config->item('css');  
		$this->load->view('login/ForgotPassword',$data);
	}

	/*function to load registration form*/
	public function registerationForm()
	{
		$data['base']       = $this->config->item('base_url');
	    $data['css']        = $this->config->item('css');  
		$this->load->view('login/Register',$data);
	}

	public function registeration()
	{
		$this->load->model('login/registeration_model');
		$result = $this->registeration_model->register();
		if($result != "Not Available")
		{
			$fname =$result->first_name;
			$lname =$result->last_name;
			$data = array("fname" => $fname, "lname" => $lname);
			$this->load->view('login/Registration_success',$data);
		}
	}



}
