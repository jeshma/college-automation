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
		

	}

	public function index()
	{
		echo 'welcome to admin';
	}

	public function view_exam()
	{
		$result =$this->exam_Model->view_all();
		if( $result != FALSE)
		{
			$data['result'] = $result;
			$this->load->view('Admin/view_exam', $data);
		}
	}


	public function view_selected()
	{
		$where = ['status' => 'listed'];
		$result =$this->exam_Model->view_where($where);
		$data['result'] = $result;
		$this->load->view('admin/view_selected', $data);
		
	
	}



	public function accept($id)
	{
		$where = ['id' => $id];
		$data = ['status' => 'listed'];
		if ($this->exam_Model->edit($where, $data))t 
		 {

			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			var_dump('fail');
		}
	}


	public function delete($id)
	{


	

		$result=$this->Application_Model->view_where($id);
		var_dump($result);
		$this->load->view('admin/view_application');

	}
		}
	
		



