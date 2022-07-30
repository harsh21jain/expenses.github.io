<?php

class Expenses_report extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		if(!$this->session->userdata('uid'))
 			redirect('login');
	}

	public function daywise()
	{
		$this->form_validation->set_rules('fromdate','From Date','required');
		$this->form_validation->set_rules('todate','To Date','required');

		if($this->form_validation->run())
		{
			$from=$this->input->post('fromdate');
			$to=$this->input->post('todate');
			$uid=$this->session->userdata('uid');

			$this->load->model('Report_Model');

			$report=$this->Report_Model->day($from,$to,$uid);

			$this->load->view('expenses_day_report',['report'=>$report,'fromdate'=>$from,'todate'=>$to]);
		}	
		else
		{
			$this->load->view('expenses_day');
		}
	}

	public function monthwise()
	{
		$this->form_validation->set_rules('fromdate','From Date','required');
		$this->form_validation->set_rules('todate','To Date','required');

		if($this->form_validation->run())
		{
			$from=$this->input->post('fromdate');
			$to=$this->input->post('todate');
			$uid=$this->session->userdata('uid');

			$this->load->model('Report_Model');

			$report=$this->Report_Model->day($from,$to,$uid);

			$this->load->view('expenses_month_report',['report'=>$report,'fromdate'=>$from,'todate'=>$to]);
		}	
		else
		{
			$this->load->view('expenses_month');
		}
	}

	public function yearwise()
	{
		$this->form_validation->set_rules('fromdate','From Date','required');
		$this->form_validation->set_rules('todate','To Date','required');

		if($this->form_validation->run())
		{
			$from=$this->input->post('fromdate');
			$to=$this->input->post('todate');
			$uid=$this->session->userdata('uid');

			$this->load->model('Report_Model');

			$report=$this->Report_Model->year($from,$to,$uid);

			$this->load->view('expenses_year_report',['report'=>$report,'fromdate'=>$from,'todate'=>$to]);
		}	
		else
		{
			$this->load->view('expenses_year');
		}
	}


}

?>