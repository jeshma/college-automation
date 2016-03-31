<?php 

/**
* 
*/
class Semester_Subject_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url','form']);
		$this->load->library('form_validation');
		$this->load->Model('Semester_Subject_Model');

	}
	
		public function add()
		{
			if($this->form_validation->run()===FALSE)
			{
				$this->load->view('admin/add_semester_subject');
			}
			else
			{
				$id=$this->input->Post('id');
				$data=[
						'semester_id'=> $id,
						'subject_id'=> $id
				];
			}
		}
	}

 ?>