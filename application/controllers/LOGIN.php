<?php 
defined('BASEPATH') OR exit('no direct script access allowed');
/**
* login class
*/
class login extends CI_Controller
{
	/*construtor method*/
	public function __construct()
	{
		parent::__construct();
	}


	public function index($page = 'login')
	{
		$this->load->view($page);
	}

	
}

 ?>
