<?php

class Register extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}

	public function index()
	{
		if($this->input->post('submit'))
		{
			$this->load->library('session');
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$mobile=$this->input->post('mobile');
			$password=$this->input->post('password');

			$chk = $this->db->query('select * from user_data where email="'.$email.'"')->result();
			if(!empty($chk))
			{
				$this->session->set_flashdata('error', 'Email ID Already Register Please Try Different ID');
				$this->load->view('register');
			}
			else
			{
				$data = array(
							'name'=>$name,
							'email'=>$email,
							'mobile'=>$mobile,
							'password'=>$password 
						);
				$res = $this->db->insert('user_data',$data);
				$this->session->set_userdata('fname',$name);
				$this->session->set_userdata('uid',$res);
				if(!empty($res))
				{
					$this->session->set_flashdata('success', 'Registartion Sucessfully');
					$this->load->view('index');
				}
				else{
					$this->session->set_flashdata('error', 'Check Again');	
				}
			}
		}
		else{
			echo "<script> alter('Recodrs Not Saved')</script>";
			$this->load->view('register');
		}
		
	}

	public function users()
	{
		$query['users'] = $this->db->query('select * from user_data')->result();
		// print_r($query);exit();
		$this->load->view('users');
	
	}


}




?>