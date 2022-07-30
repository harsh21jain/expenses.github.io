<?php

class Register_Model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	// public function insert($name,$email,$mobile,$password)
	// {
	// 	$query=$this->db->query("insert into user_data set name='$name',email='$email',mobile='$mobile',password='$password'");

	// 	$data['message']="<script>alert('You are registered successfully')</script>";

	// 	$this->load->view('register',$data);
	// }

	public function check_data($email,$password)
	{
		
		$data=array('email'=>$email,
                    'password'=>$password);

		$query=$this->db->where($data);
        $login=$this->db->get('user_data');

        if($login!=NULL)
        {
            return $login->row();
        }  

	}
}



?>