<?php

class Profile extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('form_validation');
		if(!$this->session->userdata('uid'))
			redirect('login');
	}	
	
	public function index()
	{
		$uid=$this->session->userdata('uid');
		$this->load->model('Profile_Model');
		$profile=$this->Profile_Model->get($uid);
		$this->load->view('profile',['profile'=>$profile]);
	
	}

	public function update()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('mobile','Mobile Number','required');
		if($this->form_validation->run())
		{
			$name=$this->input->post('name');
			$mobile=$this->input->post('mobile');
			$uid=$this->session->userdata('uid');
			$this->load->model('Profile_Model');
			$profile=$this->Profile_Model->update_profile($uid,$name,$mobile);
			echo "<script>alert('Profile updated successfull')</script>";
				redirect('http://localhost/expenses/admin-profile');
			//$this->load->view('Profile');
						
		} 
		else 
		{
			$this->session->set_flashdata('error','Something went wrong. Please try again.');
			redirect('Profile');
		}
	}




}

?>