<?php

class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email','Email id','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run())
		{
		    $email=$this->input->post('email');
			$password=$this->input->post('password');

			$this->load->model('Register_Model');
		    $validate=$this->Register_Model->check_data($email,$password);

			if($validate)
			{
				$this->session->set_userdata('uid',$validate->id);	
				$this->session->set_userdata('fname',$validate->name);	
				redirect('http://localhost/expenses/index');//changes
			} 
			else 
			{
				$this->session->set_flashdata('error','Invalid login details.Please try again.');
				$this->load->view('login');
			}

		} 
		else
		{
			$this->load->view('login');	
		}
	}

}


?>