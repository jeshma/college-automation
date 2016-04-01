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
		$this->load->model('Staff_Model');
		$this->load->model('Attendence_Model');
		}
	
	public function index()
	
	{
		echo 'welcome to admin';
	}

	public function view_application()
	
	{
		$data['result'] =$this->Application_Model->view_all();
	
		if( $data['result']!= FALSE)
		{
			$this->load->view('admin/view_applications', $data);

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


	public function delete($id)
	
	{
		if($this->Application_Model->delete($id))
		{
			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			var_dump('fail');
		}
	}


	public function reject($id)
	{
		if($this->Application_Model->reject($id))
		{
			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			var_dump('fail');
		
			}

		
	}

	public function add_exam()
	
	{
		$this->load->view('admin/add_exam');
	}


	public function add_staff()
	
	{
		// get all department and pass to the view file

		$this->load->view('admin/add_staff');
	}

	
	
	public function add_department()
	
	{
		$this->load->view('admin/add_department');
	}

	public function add_attendence()
	
	{
		$data['staffs'] = $this->Staff_Model->view();
		$this->load->view('admin/add_attendence',$data);


	}


	public function view_attendence()
	{
		var_dump($result);
		$result =$this->Attendence_Model->view_all();
		$data['result'] = $result;
		$this->load->view('admin/view_attendence', $data);
		

		}

	public function add_payroll()
	
	{ 	
		$data['result'] = $this->Staff_Model->view();
		$this->load->view('admin/add_payroll',$data);
	}
	

}
	





