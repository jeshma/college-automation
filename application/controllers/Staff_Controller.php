<?php 



/**
* 
*/
class Staff_COntroller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		// LOAD MODEL
	}


	public function add()
	{
		$this->form_validation->set_rule('name','Name','required');		
		$this->form_validation->set_rule('name','Name','required');		
		$this->form_validation->set_rule('name','Name','required');

		if($this->form_validation->run() === FALSE)		
		{
			$this->load->view('admin/add_staff');
		}
		else
		{
			$data[
				'name' => $this->input->post('name'),
				'address',
				'department_id'
			];
			// CALL method from model class for insert

			// if fail
			$data['error'] => 'insertion failed';
			$this->load->view('admin/add_staff',$data);
		}
	}
}

