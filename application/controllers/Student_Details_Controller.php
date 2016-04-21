<?php
/**
* 
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class Student_Details_Controller extends Check_Logged
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url','form']);
		$this->load->library(['form_validation','table']);
		$this->load->model('Student_Details_Model');
		$this->load->model('Course_Model');
		$this->load->model('Application_Model');
	}

	public function index()
	{
		if ($this->logged == true) {
			# code...
			$data['course'] = $this->Course_Model->get_all();
	        $data['result'] = $this->Student_Details_Model->view_all();
	        $this->load->view('admin/view_student_details',$data);
		}else
			redirect(base_url('login'));


    }

	   public function view($id)
    {

    	$data['semester'] = $this->Student_Details_Model->get_where(['Student_id' => $id]);
    	$data['id'] = $id;
    	if ($data['result'] != FALSE)
		 {
			$this->load->view('admin/view_student_details',$data);
		 }
		else
		  {
			$data['message'] = 'No record found';
			$this->load->view('admin/view_student_details',$data);
		  }
	
		}


    public function add()
    {
        if ($this->logged == true) {
            $data['course'] = $this->Course_Model->get_all();
            $this->load->view('admin/add_student_details', $data);
        }else
            redirect(base_url('login'));
    }

    public function add_dir($id)
    {
  	  	$data['course'] = $this->Course_Model->get_all();

  	  	$where = ['id' => $id];
  	  	$application = $this->Application_Model->view_where($where);
  	  	$data['applicant'] =  $application;
        $this->load->view('admin/add_student_details', $data);


    }

	public function submit()
	{
		$this->form_validation->set_rules('name','name','required');
		// $this->form_validation->set_rules('day','dob','');
		// $this->form_validation->set_rules('address','address','');
		// $this->form_validation->set_rules('gender','gender','');
		// $this->form_validation->set_rules('father','father','');
		// $this->form_validation->set_rules('mother','mother','');
		// $this->form_validation->set_rules('pin','pin','');
		// $this->form_validation->set_rules('income','income','');
		// $this->form_validation->set_rules('phone','phone','');
		// $this->form_validation->set_rules('mail','mail','');
		// $this->form_validation->set_rules('community','community','');
		// $this->form_validation->set_rules('cast','cast','');
		// $this->form_validation->set_rules('panchayath','panchayath','');
		// $this->form_validation->set_rules('taluk','taluk','');
		// $this->form_validation->set_rules('district','district','');
		// $this->form_validation->set_rules('martial_status','martia','');
		// $this->form_validation->set_rules('spouse','spouse','');
		// $this->form_validation->set_rules('institute','institute','');
		// $this->form_validation->set_rules('physical','physical','');
		//$this->form_validation->set_rules('course','course','required');

			if ($this->form_validation->run() === FALSE)
		    {
		    	var_dump('failed');
				$this->load->view('admin/add_student_details');
			}
			else
			{
		
				$data =[

						'name'=>$this->input->post('name'),
						'dob'=>$this->input->post('day'),
						'address'=>$this->input->post('address'),
						'gender'=>$this->input->post('gender'),
						 'father'=>$this->input->post('father'),
						// 'pin'=>$this->input->post('mother'),
						 'income'=>$this->input->post('income'),
						'phone'=>$this->input->post('phone'),
						 'email'=>$this->input->post('mail'),
						 'community'=>$this->input->post('community'),
						 'cast'=>$this->input->post('cast'),
						 'panchayath'=>$this->input->post('panchayath'),
						 'taluk'=>$this->input->post('taluk'),
						 'district'=>$this->input->post('district'),
						 'marital_status'=>$this->input->post('martial_status'),
						 'last_institute'=>$this->input->post('institute'),
						 'physical_handicaped'=>$this->input->post('phycical'),
						'cource_id'=>$this->input->post('course')
						// 'cource_name'=>$this->input->post('course_name')

				];
				$query= $this->Student_Details_Model->add($data);
			if($query != FALSE)
			{
				
						
				$data['message'] = '<script type="text/javascript">
										alert("adding success");
										window.location = "'.base_url().'dashboard/students/view'.'";
									</script>';
				$this->load->view('student_details',$data);
			}
			else
			{
				$data=['error' => 'insertion failed'];
			    $this->load->view('student_details',$data);
			}
			}
	}


    public function search()
    {
        $name = $this->input->post('name');
        $course = $this->input->post('course');

        $where = [
            'students.name' => $name,
            'students.cource_id' => $course
        ];

        $students = $this->Student_Details_Model->view_where($where);
        $courses = $this->Course_Model->get_all();

        $data['result'] = $students;
        $data['course'] = $courses;

        $this->load->view('admin/view_student_details', $data);
    }

}

