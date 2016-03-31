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
		$this->load->library(['form_validation']);
		$this->load->model('exam_Model');
		

	}

	public function index()
	{
		echo 'welcome to exam';
	}

	public function add()
	{
		$this->form_validation->set_rules('name','Name','required');
		$this->form_validation->set_rules('department','Department','required');
		$this->form_validation->set_rules('date','Date','required');
		$this->form_validation->set_rules('time','time','required');
		
		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('admin/add_exam');
		}
		else
		{
			$data=[
				'name' => $this->input->post('name'),
				'department' => $this->input->post('department') ,
				'date' => $this->input->post('date'),
				'time' => $this->input->post('time')
			];
			if ($this->Exam_Model->add($data) != FALSE) 
			{

				$data['message'] = '<script type="text/javascript">
										alert("adding success");
										window.location = "'.base_url().'Admin_Controller/add_exam"
									</script>';
				$this->load->view('admin/add_exam',$data);
			}
			else
			{
				$data=['error' => 'insertion failed'];
			    $this->load->view('admin/add_exam',$data);
			}
			
		}
	}
}

	