<?php

class Logout extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
   
    if(!$this->session->userdata('uid')){
 		redirect('http://localhost/expenses/login');
    }
  }
	
	public function index()
  {

    $this->session->unset_userdata('uid');
    $this->session->sess_destroy();
    $this->session->set_flashdata('success', 'Thank You For Your Interest');
    return redirect('http://localhost/expenses');
 
  }
}

?>