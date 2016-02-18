<?php
defined('BASEPATH') OR exit('no direct script access allowed');
/**
 * 
 */
 class Attendence_Controller extends CI_Controller
 {
 	
 	public function __construct()
 	{
       parent::__construct();
		$this->load->helper(['url', 'form']);
		$this->load->library(['form_validation']);
		$this->load->model('Attendence_Model');
 	}
 	public function attendence($data = 'attendence')
	{
		$this->load->view($data);

	}

 	public function add_attendence()
 	{
 		$this->form_validation->set_rules('staff','Name','required');
 		$this->form_validation->set_rules('attendence','Attendence','required');
 	
 		if($this->form_validation->run('attendence') === FALSE)
		{
			$this->load->view('admin/add_attendence');
		}
		else
		{
	 		$name = $this->input->post('staff');
	 		$attendence = $this->input->post('attendence');

	 		$data = [
	 					'staff_id'=>$name,
	 					'attendance'=>$attendence
	 		];
	 		$query= $this->Attendence_Model->add($data);
			
			if($query != FALSE)
			{			
				$data['message'] = '<script type="text/javascript">
										alert("adding success");
										window.location = "'.base_url().'Admin_Controller/add_attendence"
									</script>';
				$this->load->view('admin/add_attendence',$data);
			}
			else
			{
				$data=['error' => 'insertion failed'];
			    $this->load->view('admin/add_attendence',$data);
			}
		
	}	}
 } 
 ?>