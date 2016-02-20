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
		$this->load->model('Cource_Model');
	}
    public function cource($data ='addcource')
    {
    	$this->load->view($data);
    }
}
 ?>