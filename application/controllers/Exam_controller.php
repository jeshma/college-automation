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
		$this->load->model('Exam_Model');
		
	}

	public function index()
	{
        $data['result'] = $this->Exam_Model->view_all();
		$this->load->view('admin/view_exam');
	}

	public function view($id)
		{
			$where = ['id' => $id];

		      $data['id'] =$id;
		      $data['result'] = $this->Exam_Model->get($where);
		      $data['departments']= $this->Department_Model->get_where(['exam_id' => $id]);

		if ($data['result'] != FALSE)
		 {
			$this->load->view('admin/view_exam',$data);
		 }
		else
		  {
			$data['message'] = 'No record found';
			$this->load->view('admin/view_exam',$data);
		  }
	
		}


	public function add()
	{
		
		
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('departments','department','required');
		$this->form_validation->set_rules('date','Date','required');
		$this->form_validation->set_rules('time','time','required');
		$this->form_validation->set_rules('duration','duration','required');


		     if($this->form_validation->run() === FALSE)
				{
					
				
                  $this->load->view('admin/view_exam');

                }
		     else
		        {

			       $data=[
				     'name' => $this->input->post('name'),
				     'date' => $this->input->post('date'),
				     'time' => $this->input->post('time'),
				     'duration' => $this->input->post('duration'),
				     'departments_id' => $this->input->post('departments')
			         ];
			        if ($this->Exam_Model->add($data) != FALSE) 
			         {

				       $data['message'] = '<script type="text/javascript">
										alert("adding success");
										window.location = "'.base_url().'Admin_Controller/view_exam"
									</script>';
				       $this->load->view('admin/view_exam',$data);
			         }
			         else
			          {
				          $data=['error' => 'insertion failed'];
			              $this->load->view('admin/add_exam',$data);
			          }
			

		        
	    }


		        }

		 public function delete($id)
		
		 {

		if($this->Exam_Model->delete($id))
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
	