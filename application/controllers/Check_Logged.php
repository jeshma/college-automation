<?php 

/**
* 
*/
class Check_Logged extends CI_Controller
{
	public $logged="";
	function __construct()
	{
		parent::__construct();
		$this->load->helper(['url','form','security']);
		$this->load->library(['form_validation','session']);
		$this->logged=$this->session_Check();
	}
	public function session_Check()
	{
		if ($this->session->userdata('logged_in')!=null) 
		{
			return true;	
		}
		else
		{
			return false;
		}

	}
}

 ?>