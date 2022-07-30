<?php

class Report_Model extends CI_Model
{
	
	public function day($from,$to,$uid)
	{
		$data=array(
			'e_date>='=>$from,
			'e_date<='=>$to,
			'user_id'=>$uid
		);
		$query=$this->db->select('e_date,e_cost')
                    ->where($data)
                    // ->group_by('e_date')
                    ->get('user_expenses');
                    return $query->result();
	}

	public function month($from,$to,$uid)
	{
		$data=array(
			'e_date>='=>$from,
			'e_date<='=>$to,
			'user_id'=>$uid
		);
		// $query=$this->db->select('sum(e_cost) as e_cost, month(e_date) as m')
  //                   ->where($data)
  //                   ->group_by(array("month(e_date)"))
  //                   ->get('user_expenses');
  //                   return $query->result();
		$query=$this->db->select('e_date,e_cost')
                    ->where($data)
                    ->get('user_expenses');
                    return $query->result();
	}

	public function year($from,$to,$uid)
	{
		$data=array(
			'e_date>='=>$from,
			'e_date<='=>$to,
			'user_id'=>$uid
		);
		$query=$this->db->select('sum(e_cost) as e_cost, year(e_date) as y')
                    ->where($data)
                    ->group_by(array("year(e_date)"))
                    ->get('user_expenses');
                    return $query->result();
	}



}


?>