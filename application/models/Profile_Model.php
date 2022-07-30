<?php

class Profile_Model extends CI_Model
{
	
	public function get($uid)
	{
		$query=$this->db->select('name,email,mobile,date')
		->where('id',$uid)
		->from('user_data')
		->get();
		return $query->row();
	}

	public function update_profile($uid,$name,$mobile)
	{
		$data=array(
		'name'=>$name,
		'mobile'=>$mobile
		);	
		$query=$this->db->where('id',$uid)
		                ->update('user',$data);
	}


}



?>