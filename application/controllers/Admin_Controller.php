<?php 
defined('BASEPATH') OR exit('no direct script access allowed');
/**
* home class
*/
class Admin_Controller extends CI_Controller
{
	/*construtor method*/
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'form']);
		$this->load->model('Application_Model');
		

	}

	public function view_application()
	{
		$result =$this->Application_Model->view_all();
		if( $result != FALSE)
		{
			$data['result'] = $result;
			$this->load->view('Admin/view_applications', $data);
		}
	}


	public function view_selected()
	{
		$where = ['status' => 'listed'];
		$result =$this->Application_Model->view_where($where);
		$data['result'] = $result;
		$this->load->view('admin/view_selected', $data);
		
	
	}



	public function accept($id)
	{
		$where = ['id' => $id];
		$data = ['status' => 'listed'];
		if ($this->Application_Model->edit($where, $data))
		 {

			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			var_dump('fail');
		}
	}

	public function selected($id)
	{		
		$result =$this->Application_Model->view_where($where);
		var_dump($result);
		}
	
	public function deleted($id)
	{

		$result=$this->Application_Model->view_where($where);
		$this->load->view('admin/view view_selected',$data)

	}
		}
	
		



