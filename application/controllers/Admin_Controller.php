<?php 
defined('BASEPATH') OR exit('no direct script access allowed');
/**
* home class
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class Admin_Controller extends Check_Logged

{
	/*construtor method*/
	public function __construct()
	
	{
		parent::__construct();
		$this->load->helper(['url', 'form']);
		$this->load->model('Application_Model');
		$this->load->model('Staff_Model');
		$this->load->model('Attendence_Model');
		$this->load->model('Department_Model');
		$this->load->model('Payroll_Model');
		$this->load->model('Exam_Model');
		$this->load->model('Student_Details_Model');
		}

    public function dashboardold()
    {
        $this->load->view('admin/dashboard1');
    }

	public function index()
	
	{
		if ($this->logged == true) {
		$this->load->view('admin/dashboard');	
		}
		else
		{
			redirect(base_url('dashboard/login'));
		}
	}


	public function login()
	{
		$this->load->view('admin/login');
	}

	public function view_application()
	
	{
		$where = ['status' => 'request'];
		$data['result'] =$this->Application_Model->view_where($where);

		if( $data['result']!= FALSE)
		{
			$this->load->view('admin/view_applications', $data);

		}
		else
		{
			$data['message'] = 'No data available';
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

	public function approve($id)
	{
		$where = ['id' => $id];
		$data = ['status' => 'approve'];

		if ($this->Application_Model->edit($where, $data)) 
		{
			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			var_dump('fail');
		}			
	}

	public function view_approved()
	{
		$where =['status' => 'approve'];
		$result = $this->Application_Model->view_where($where);
		$data['result'] =$result;
		$this->load->view('admin/view_approved',$data); 
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
		$data['departments']= $this->Department_Model->get_all();
		$this->load->view('admin/add_exam',$data);
	}

	public function examdele($id)
	
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
	public function view_exam()

	{
		$data['result'] = $this->Exam_Model->view_all();

		if($data['result']!= FALSE)
		{
		$this->load->view('admin/view_exam', $data);

		}
		else
		{
			$data['message'] = 'No data available';
			$this->load->view('admin/view_exam', $data);
		}

	}


	public function add_staff()
	
	{
		// get all department and pass to the view
		$data['departments'] = $this->Department_Model->get_all();
		$this->load->view('admin/view_staffs',$data);
	}


    public function view_staffs()
    
	{

        $data['departments'] = $this->Department_Model->get_all();
		$result =$this->Staff_Model->view_all();
		if( $result != FALSE)
		{
            $data['result'] = $result;
        }
        $this->load->view('admin/view_staffs', $data);

    }
	public function staffdele($id)
	
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
	
	public function add_department()
	
	{
		$this->load->view('admin/add_department');
	}

	public function add_attendence()
	
	{
		$data['staffs'] = $this->Staff_Model->view_all();
		$this->load->view('admin/add_attendence',$data);


	}


	public function view_attendence()
	{
		
		$result =$this->Attendence_Model->view_all();
		$data['result'] = $result;
		$this->load->view('admin/view_attendence', $data);
		

	}



	public function add_payroll()
	
	{ 	
		$data['result'] = $this->Staff_Model->view_all();
		$this->load->view('admin/Add_payroll',$data);
	}


	

 
public function add_semester()

	{
		$this->load->view('admin/add_semester');
	}

	public function semdelete($id)
	
	{
		if($this->Semester_Model->delete($id))
		{
			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			var_dump('fail');
		}
	}

	public function add_subject()
	{
		$this->load->view('admin/add_subject');
	}
    

    public function view_student_details()
    {
    	$data['result'] =$this->Student_Details_Model->view_all();
	
		if( $data['result']!= FALSE)
		{
			$this->load->view('admin/view_student_details', $data);

		}
    }



	public function subdelete($id)
	
	{
		if($this->Subject_Model->delete($id))
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
	



