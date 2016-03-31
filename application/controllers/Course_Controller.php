<?php 	

/**
* 
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class Course_Controller extends Check_Logged
{
			
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url' , 'form']);
		$this->load->library(['form_validation']);
		$this->load->model('Course_Model');
		$this->load->model('Semester_Model');
		$this->load->model('Semester_Subject_Model');
		
		
	
	}
    public function index()

    {
    	$data['result'] = $this->Course_Model->get_all();
			$this->load->view('admin/view_course',$data);
    
    }

    public function view($id)
    {

    	$data['semester'] = $this->Semester_Model->get_where(['cources_id' => $id]);
    	$data['id'] = $id;
    	
    	if ($data['semester']!=FALSE)
    	 {
    	
    	foreach ($data['semester'] as $key => $value) 
    	{
    		$where = ['semester_id' => $value->id];
 		   	$data['subjects'] = $this->Semester_Subject_Model->view_where($where);
    	}
        }
        
     $this->load->view('admin/add_semester',$data);
    }

   public function add()

         {

    	$this->form_validation->set_rules('course','Name','required');
    	$this->form_validation->set_rules('description','Description','');

    		if($this->form_validation->run() === FALSE)
    		{
    				
    				$this->load->view('admin/view_department');

    			}

    		else
    			
    			{
    				$id=$this->input->post('id');
    				$name = $this->input->post('course');
	 				$description = $this->input->post('description');

	 				$data = [
	 					'name'=>$name,
	 					'description'=>$description,
	 					'department_id'=>$id
	 			];

    		  $query= $this->Course_Model->add($data);
			  if($query != FALSE)
			  {
			  	$data['id'] = $query;
			 	 $data['message'] = '<script type="text/javascript">
										alert("adding success");
										window.location = "'.$_SERVER["HTTP_REFERER"].'"
									</script>';
				$this->load->view('admin/view_department',$data);
			  }
			  else
			  {
				 $data=['error' => 'insertion failed'];
			    $this->load->view('view_department',$data);
			  }	
     
   			}
         }
<<<<<<< HEAD

         public function delete($id)
		{

		   if($this->Course_Model->delete($id))
		      {

			    redirect($_SERVER['HTTP_REFERER']);
	       	  }
		   else
		      {
			    var_dump('fail');
		      }

	    }
	    public function add_semester_subject()
	    {
	    	$data['semester'] = $this->Staff_Model->view();
	    	$data['subject'] = $this->Staff_Model->view();
	    	$this->load->view('admin/add_semester_subject');
	    }
    }

    ?>
=======
    
         	
    }


    ?>
>>>>>>> 13b9af121266e034536cd1eae6beb98a3a322f92
