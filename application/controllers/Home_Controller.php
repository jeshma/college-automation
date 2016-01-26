<?php 
defined('BASEPATH') OR exit('no direct script access allowed');
/**
* home class
*/
class Home_Controller extends CI_Controller
{
	/*construtor method*/
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}


	public function index($page = 'home')
	{
		$this->load->view($page);
	}

	public function about($page = 'about')
	{
		$this->load->view($page);
	}
	public function regist($page = 'regist')
	{
		$this->load->view($page);
	}
	public function application($page = 'application')
	{
		$this->load->view($page);
	}
}

 ?>