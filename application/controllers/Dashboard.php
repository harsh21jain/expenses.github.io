<?php
/**
 * 
 */
class Dashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		// if(!$this->session->userdata('uid'))
		// 	$this->session->set_flashdata('error', 'First Login Then Access Dashboard');
 	// 		redirect('http://localhost/expenses/login');
	}

	public function index(){

		$uid=$this->session->userdata('uid');	

	    $this->load->model('Dashboard_Model');

		$today = $this->Dashboard_Model->today_expense($uid);

		$yesterday = $this->Dashboard_Model->yesterday_expense($uid);

		$last7days = $this->Dashboard_Model->last7_expense($uid);

		$last30days = $this->Dashboard_Model->last30_expense($uid);
		
		$total = $this->Dashboard_Model->total_expense($uid);

	    $this->load->view('index',['texpense'=>$today,
	    	                       'yexpense'=>$yesterday,
	    	                       'last7'=>$last7days,
	    	                       'last30'=>$last30days,
	    	                       'total'=>$total]);
	}
}


?>