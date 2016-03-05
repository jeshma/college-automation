<?php 
defined('BASEPATH') OR exit('no direct script access allowed');
/**
* home class
*/
class Exam_Controller extends CI_Controller
{
	/*construtor method*/
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'form']);
		$this->load->model('exam_Model');
		$this->load->library('form_validation');

	}

	public function index()
	{
		echo 'welcome to exam';
	}

	public function add()
	{
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('departemnt','departemnt','required');
		$this->form_validation->set_rules('Date','Date','required');
		$this->form_validation->set_rules('time','time','required');


		if($this->form_validation->run() === FALSE)
				{

			$this->load->view('admin/add_exam');
		}
		else
		{

			$data=[
				'name' => $this->input->post('name'),
				'departemnt' => $this->input->post('departemnt') 
				'date' => $this->input->post('date')
				'time' => $this->input->post('time')

			];

			
			}
}

	