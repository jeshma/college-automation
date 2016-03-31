<?php 



/**
* 
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class Staff_Controller extends Check_Logged
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');		
		$this->load->helper('url');	
		$this->load->library('form_validation');
		$this->load->model('Staff_Model');
	}
	/*public function index()
	{
		$this->load->view('admin/add_staff');
	}*/

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
				'departments_id' => $this->input->post('department')
			];
			if ($this->Staff_Model->add($data) != FALSE) 
			{

				$data['message'] = '<script type="text/javascript">
										alert("adding success");
										window.location = "'.base_url().'Admin_Controller/add_staff"
									</script>';
				$this->load->view('admin/add_staff',$data);
			}
			else
			{
				$data=['error' => 'insertion failed'];
			    $this->load->view('admin/add_staff',$data);
			}
			
			
		}
	}
}

