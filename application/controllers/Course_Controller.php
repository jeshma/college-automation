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
    public function course($data ='course')
    {
    	$this->load->view($data);
    }


   public function add()
         {

    	$this->form_validation->set_rules('course','Name','required');
    	$this->form_validation->set_rules('description','Description','required');

    		if($this->form_validation->run() === FALSE)	
    			{
    				echo "string";
    				$this->load->view('admin/view_department');
    			}
    		else
    			{
    				$name = $this->input->post('name');
	 		$description = $this->input->post('description');

	 		$data = [
	 					'name'=>$name,
	 					'description'=>$description
	 		];
    				
    		  $query= $this->Course_Model->add($data);
			  if($query != FALSE)
			  {
			 	 var_dump('success');
			  }
			  else
			  {
				 var_dump('fail');
			  }	
     
   				}
         }
    
}
 ?>