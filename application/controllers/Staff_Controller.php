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
	public function index()
	{
		$this->load->view('admin/add_staff');

	}
	public function view($id)
	{
		$where = [$id => 'id'];
		$data['id'] =$id;
		$data['result']=$this->Staff_Model->get_where(['staffs_id' =>$id]);
		if ($data['result']!=FALSE)
	    {
			$this->load->view('admin/add_staff');
		}
		else
		{
			$data['message'] = 'No record found';
			$this->load->view('admin/view_staffs',$data);
		}
	}
	

	public function add()
	{
		$this->form_validation->set_rules('departments','Department','required');
		$this->form_validation->set_rules('name','Name','required');		
		$this->form_validation->set_rules('address','Address','required');		

		if($this->form_validation->run() === FALSE)		
		{

			$this->load->view('admin/add_staff');
		}
		else
		{

			$data=[
				'name' => $this->input->post('name'),
				'address' => $this->input->post('address') ,
				'departments_id' => $this->input->post('departments')
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

	//public function delete($id)
	
	//{
	//	if($this->Staff_Model->delete($id))
	//	{
	//		redirect($_SERVER['HTTP_REFERER']);
	//	}
	//	else
	//	{
	//		var_dump('fail');
	//	}
	//}
}

?>