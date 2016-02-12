<?php 



/**
* 
*/
class Staff_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');		
		$this->load->helper('url');	
		$this->load->library('form_validation');
		$this->load->model('Staff_Model');
	}


	public function add()
	{
		$this->form_validation->set_rules('name','Name','required');		
		$this->form_validation->set_rules('address','Address','required');		
		$this->form_validation->set_rules('department','Department','required');

		if($this->form_validation->run() === FALSE)		
		{
			$this->load->view('admin/add_staff');
		}
		else
		{

			$data=[
				'name' => $this->input->post('name'),
				'address' => $this->input->post('address') ,
				'dapartment_id' => $this->input->post('department')
			];
			if ($this->Staff_Model->add($data) == TRUE) 
			{

				$this->load->view('admin/add_staff');
			}
			else
			{
				// CALL method from model class for insert

			// if fail
				$data=['error' => 'insertion failed'];
			    $this->load->view('admin/add_staff',$data);
			}
			
			
		}
	}
}

