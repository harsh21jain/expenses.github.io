<?php

class Dashboard_Model extends CI_Model
{
	
	public function today_expense($uid)
	{
		$tdate = date('Y-m-d');
		$data = array('e_date'=>$tdate,'user_id'=>$uid);
		$this->db->select_sum('e_cost');
		$this->db->where($data);
		$result=$this->db->get('user_expenses')->row();
		return $result->e_cost;
	}

	public function yesterday_expense($uid)
	{
		$tdate = date('Y-m-d',strtotime("-1 days"));
		$data = array('e_date'=>$tdate,'user_id'=>$uid);
		$this->db->select_sum('e_cost');
		$this->db->where($data);
		$result=$this->db->get('user_expenses')->row();
		return $result->e_cost;
	}

	public function last7_expense($uid)
	{
		$tdate = date('Y-m-d',strtotime("-1 week"));
        $cdate = date('Y-m-d');

		$data = array('e_date>='=>$tdate,
			          'e_date<='=>$cdate,
			          'user_id'=>$uid);

		$this->db->select_sum('e_cost');
		$this->db->where($data);
		$result=$this->db->get('user_expenses')->row();
		return $result->e_cost;
	}

	public function last30_expense($uid)
	{
		$tdate = date('Y-m-d',strtotime("-1 month"));
        $cdate = date('Y-m-d');

		$data = array('e_date>='=>$tdate,
			          'e_date<='=>$cdate,
			          'user_id'=>$uid);
		
		$this->db->select_sum('e_cost');
		$this->db->where($data);
		$result=$this->db->get('user_expenses')->row();
		return $result->e_cost;
	}

	// public function current_expense($uid)
	// {
	// 	$tdate = date('Y');

	// 	$data = array('year(e_date)'=>$tdate,
	// 		          'user_id'=>$uid);
		
	// 	$this->db->select_sum('e_cost');
	// 	$this->db->where($data);
	// 	$result=$this->db->get('user_expenses')->row();
	// 	return $result->e_cost;
	// }

	public function total_expense($uid)
	{

		$data = array('user_id'=>$uid);
			          
		$this->db->select_sum('e_cost');
		$this->db->where($data);
		$result=$this->db->get('user_expenses')->row();
		return $result->e_cost;
	}

}


?>