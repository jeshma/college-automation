<?php 	

/**
* 
*/
class Cource_Controller extends CI_Controller
{
			
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url']);
		$this->load->model('Course_Model');
	}
    

    public function course($data ='addcourse')
    {
    	$this->load->view($data);
    }


    public function add()
    {
    	
    }
}
 ?>