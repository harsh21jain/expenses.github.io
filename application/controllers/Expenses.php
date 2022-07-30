<?php

class Expenses extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('form_validation');
		if(!$this->session->userdata('uid'))
 			redirect('http://localhost/expenses/login');
	}

	public function add()
	{

		$this->form_validation->set_rules('date','Date','required');
		$this->form_validation->set_rules('item','Item','required');
		$this->form_validation->set_rules('citem','Cost Of Item','required');

		if($this->form_validation->run())
		{
			$date=$this->input->post('date');
			$item=$this->input->post('item');
			$icost=$this->input->post('citem');
			$uid=$this->session->userdata('uid');

			$this->load->model('Expenses_Model');

			$this->Expenses_Model->add($uid,$date,$item,$icost);
		} 
		else
		{
			$this->load->view('add_expenses');	
		}
	}

	public function manage(){
		$uid=$this->session->userdata('uid');	
 		$this->load->model('Expenses_Model');

 		$expense_detail =$this->Expenses_Model->manage($uid);

 		$this->load->view('manage_expenses',['expense_detail'=>$expense_detail]);
	}




}




?>