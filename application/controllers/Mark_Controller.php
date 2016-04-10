<?php 
defined('BASEPATH') OR exit('no direct script access allowed');
/**
* home class
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class Exam_Controller extends Check_Logged
{
	/*construtor method*/
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'form']);
		$this->load->library('form_validation');
		$this->load->model('Mark_Model');
		
	}

	public function index()
	{
		$this->load->view('admin/view_exam');
	}

	public function view($id)
		{
			$where = ['id' => $id];

		      $data['id'] =$id;
		      $data['result'] = $this->Mark_Model->get($where);
		      $data['departments']= $this->semester_Model->get_where(['mark_id' => $id]);

		if ($data['result'] != FALSE)
		 {
			$this->load->view('admin/view_mark',$data);
		 }
		else
		  {
			$data['message'] = 'No record found';
			$this->load->view('admin/view_mark',$data);
		  }
	
		}

		public function add()
		{
				
		$this->form_validation->set_rules('student','name','required');
		$this->form_validation->set_rules('examtypes','examtypes','required');
		$this->form_validation->set_rules('semester','semester','required');
		
				     if($this->form_validation->run() === FALSE)
				{
					
				
                  $this->load->view('admin/view_mark');

                }
		     else
		        {

			       $data=[
				     'student_id' => $this->input->post('student'),
				     'examtypes_id' => $this->input->post('examtypes'),
				     'semester_id' => $this->input->post('semester')
			         ];
			        if ($this->Mark_Model->add($data) != FALSE) 
			         {

				       $data['message'] = '<script type="text/javascript">
										alert("adding success");
										window.location = "'.base_url().'Staff_Controller/view_mark"
									</script>';
				       $this->load->view('staff/add_mark',$data);
			         }
			         else
			          {
				          $data=['error' => 'insertion failed'];
			              $this->load->view('staff/add_mark',$data);
			          }
			
}
		}

}?>