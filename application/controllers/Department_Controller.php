<?php 

/**
* 
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class Department_Controller extends Check_Logged
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url' , 'form']);
		$this->load->library(['form_validation']);
		$this->load->model('Department_Model');
		$this->load->model('Course_Model');
	}

	public function index()
	{
		$data['result'] = $this->Department_Model->get_all();
		$this->load->view('admin/view_departments',$data);
	}


	public function view($id)
	{
		$where = ['id' => $id];

		$data['id'] =$id;
		$data['result'] = $this->Department_Model->get($where);
		$data['course']= $this->Course_Model->get_where(['department_id' => $id]);

		if ($data['result'] != FALSE) {
			$this->load->view('admin/view_department',$data);
		}
		else
		{
			$data['message'] = 'No record found';
			$this->load->view('admin/view_department',$data);
		}
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
										window.location = "'.base_url().'Department_Controller"
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
		public function delete($id)
		{

		if($this->Department_Model->delete($id))
		{

			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			var_dump('fail');
		}
	

	    }

	 }

	
?>
						