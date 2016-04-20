<?php
/**
* 
*/
class Student_Details_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url','form']);
		$this->load->library(['form_validation','table']);
		$this->load->model('Student_Details_Model');
		$this->load->model('Course_Model');
	}

	public function index()
	{
        $data = $this->Student_Details_Model->view_all();
        if (isset($data)) {
//            $this->table->set_heading(array('student_id', 'name'));
//            foreach ($data as $key => $value)
//            {
//                $this->table->add_row(array($value->id, $value->name));
//            }
//            $template = array(
//                'table_open'            => '<table class="table">',
//
//                'thead_open'            => '<thead class="header">',
//                'thead_close'           => '</thead>',
//
//                'heading_row_start'     => '<tr>',
//                'heading_row_end'       => '</tr>',
//                'heading_cell_start'    => '<th>',
//                'heading_cell_end'      => '</th>',
//
//                'tbody_open'            => '<tbody>',
//                'tbody_close'           => '</tbody>',
//
//                'row_start'             => '<tr>',
//                'row_end'               => '</tr>',
//                'cell_start'            => '<td>',
//                'cell_end'              => '</td>',
//
//                'row_alt_start'         => '<tr>',
//                'row_alt_end'           => '</tr>',
//                'cell_alt_start'        => '<td>',
//                'cell_alt_end'          => '</td>',
//
//                'table_close'           => '</table>'
//            );
//
//            $this->table->set_template($template);
//            $data['students']= $this->table->generate();


            $this->load->view('admin/view_student_details',$data);
        }


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
        $data['course'] = $this->Course_Model->get_all();
        $this->load->view('admin/add_student_details', $data);
    }

	public function submit()
	{
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('day','dob','required');
		$this->form_validation->set_rules('address','address','required');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('father','father','required');
		$this->form_validation->set_rules('mother','mother','required');
		$this->form_validation->set_rules('pin','pin','required');
		$this->form_validation->set_rules('income','income','required');
		$this->form_validation->set_rules('phone','phone','required');
		$this->form_validation->set_rules('mail','mail','required');
		$this->form_validation->set_rules('community','community','required');
		$this->form_validation->set_rules('cast','cast','required');
		$this->form_validation->set_rules('panchayath','panchayath','required');
		$this->form_validation->set_rules('taluk','taluk','required');
		$this->form_validation->set_rules('district','district','required');
		$this->form_validation->set_rules('martial_status','martia','required');
		$this->form_validation->set_rules('spouse','spouse','required');
		$this->form_validation->set_rules('institute','institute','required');
		$this->form_validation->set_rules('physical','physical','required');
		//$this->form_validation->set_rules('course','course','required');

			if ($this->form_validation->run()===FALSE)
		    {
		    	
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
						'pin'=>$this->input->post('mother'),
						'income'=>$this->input->post('income'),
						'number'=>$this->input->post('phone'),
						'mail'=>$this->input->post('mail'),
						'religion_community'=>$this->input->post('community'),
						'cast'=>$this->input->post('cast'),
						'panchayath'=>$this->input->post('panchayath'),
						'taluk'=>$this->input->post('taluk'),
						'district'=>$this->input->post('district'),
						'martia_status'=>$this->input->post('martial_status'),
						'spouse_name_address'=>$this->input->post('spouse'),
						'institution_last_attend'=>$this->input->post('institute'),
						'physically_handicapped'=>$this->input->post('phycical'),
						//'course_id'=>$this->input->post('course')

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
        $course = $this->input->post('cource');

        $where = [
            'name' => $name,
            'cource_id' => $course
        ];

        $students = $this->Student_Details_Model->view_where($where);

        $courses = $this->Course_Model->get_all();

        $data['students'] = $students;
        $data['course'] = $courses;

        $this->load->view('admin/view_student_details', $data);
    }

}

