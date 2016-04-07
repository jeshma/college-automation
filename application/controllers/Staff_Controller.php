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
		$this->load->model('Payroll_Model');
		$this->load->model('Attendence_Model');
	}
	 public function index()
	{
	 	$data['result'] = $this->Staff_Model->view_all();
	 	$this->load->view('admin/add_staff');

	 }

	 public function view_all()
	 {
	 	$result = $this->db->get('staffs');
		if ($result != FALSE) 
		
		{
		if($result->num_rows() >=1)
		{
			return $result->result();	
		}
		else
		{
			return FALSE;
		}
	}	   
	   else
	   {
	   	  return FALSE;
	   }	
	 }


	public function view($id)
	{
		$where = [$id => 'id'];
		$data['id'] =$id;
		$data['result']=$this->Staff_Model->view_where(['departments_id' =>$id]);
		if ($data['result']!=FALSE)
	    {
			$this->load->view('admin/view_staffs',$data);
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
										window.location = "'.base_url().('Admin_Controller/view_staffs').'"
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
	public function delete($id)
		{

		if($this->Staff_Model->delete($id))
		{

			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			var_dump('fail');
		}
	

	    }

	    public function view_staff_details($id)
	    {
	    	$where=['id'=>$id];
	    	$result['staffs']=$this->Staff_Model->view($where);
	    	$result['payroll']=$this->Payroll_Model->view($id);
	    	$result['attendence']=$this->Attendence_Model->view($id);
	    	if($result != FALSE)
	    	{
	    		
	    		$this->load->view('admin/view_staff_details',$result);
	    	}
	    }

	}




?>
