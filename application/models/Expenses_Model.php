<?php

class Expenses_Model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function add($uid,$date,$item,$icost)
	{
		$data=array(
			'user_id'=>$uid,
			'e_date'=>$date,
			'e_item'=>$item,
			'e_cost'=>$icost
		);
		$query=$this->db->insert('user_expenses',$data);
		if($query)
		{
			$this->session->set_flashdata('success','Expense added successfully.');	
			$this->load->view('add_expenses');
		} else {
		$this->session->set_flashdata('error','Something went wrong. Please try again.');	
		redirect('Expenses/add');	
		}
	}

	public function manage($uid){

		$query = $this->db->select('e_date,e_item,e_cost,note_date,id')
		->where('user_id',$uid)
		->order_by('id','DESC')
		->get('user_expenses');

		return $query->result();


	}



}


?>