<?php
/**
* 
*/
class User_Form_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url','form']);
		$this->load->library('form_validation');
	}

	public function user_form()
	{
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('dob','dob','required');
		$this->form_validation->set_rules('address','address','required');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('father','father','required');
		$this->form_validation->set_rules('mother','mother','required');
		$this->form_validation->set_rules('pin','pin','required');
		$this->form_validation->set_rules('income','income','required');
		$this->form_validation->set_rules('phone','phone','required');
		$this->form_validation->set_rules('mail','mail','required');
		$this->form_validation->set_rules('community','community','required');
		$this->form_validation->set_rules('cast','cast','required');
		$this->form_validation->set_rules('panchayath','panchayath','required');
		$this->form_validation->set_rules('taluk','taluk','required');
		$this->form_validation->set_rules('district','district','required');
		$this->form_validation->set_rules('martia','martia','required');
		$this->form_validation->set_rules('spouse','spouse','required');
		$this->form_validation->set_rules('institute','institute','required');
		$this->form_validation->set_rules('physical','physical','required');
		$this->form_validation->set_rules('course','course','required');

			if ($this->form_validation->run()===FALSE)
		    {
				$this->load->view('user_form');
			}
	}

}
?>