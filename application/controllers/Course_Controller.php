<?php 	

/**
* 
*/
class Course_Controller extends CI_Controller
{
			
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url' , 'form']);
		$this->load->library(['form_validation']);
		$this->load->model('Course_Model');
		
		
	
	}
    public function index()

    {
    	$data['result'] = $this->Course_Model->get_all();
			$this->load->view('admin/view_course',$data);
    
    }


   public function add()

         {

    	$this->form_validation->set_rules('course','Name','required');
    	$this->form_validation->set_rules('description','Description','required');

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
										window.location = "'.base_url().'Course_Controller/index"
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
    }

    ?>