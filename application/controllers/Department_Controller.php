<?php 

/**
* 
*/
class Department_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Department_Model');
	}
	public function add()
	{
		$this->form_validation->set_rules('name','name','required');	
		$this->form_validation->set_rules('description','Description','required');	
	
	if($this->form_validation->run() === FALSE)		
		{

			$this->load->view('admin/add_department');
		}
		else
		{

			$data=[
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description') 
			];
		if ($this->Department_Model->add($data) != FALSE) 
			{

				$data['message'] = '<script type="text/javascript">
										alert("adding success");
										window.location = "'.base_url().'Admin_Controller/add_department"
									</script>';
				$this->load->view('admin/add_department',$data);
			}
			else
			{
				$data=['error' => 'insertion failed'];
			    $this->load->view('admin/add_department',$data);
			}
		}	
    }

}
 
 ?>
