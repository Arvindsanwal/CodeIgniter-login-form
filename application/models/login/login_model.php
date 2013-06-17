<?php

class Login_Model extends CI_Model
{
	     
	  function index()
	  {
	  	$data['base']       = $this->config->item('base_url');
	    $data['css']        = $this->config->item('css');    
	    return $data;  
	  }
	 
}
?>