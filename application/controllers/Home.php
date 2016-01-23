<?php 
defined('BASEPATH') OR exit('no direct script access allowed');
/**
* home class
*/
class Home extends CI_Controller
{
	/*construtor method*/
	public function __construct()
	{
		parent::__construct();
	}


	public function index($page = 'home')
	{
		$this->load->view($page);
	}

	public function about($page = 'about')
	{
		$this->load->view($page);
	}
}

 ?>