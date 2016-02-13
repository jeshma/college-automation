<?php 
defined('BASEPATH') OR exit('no direct script access allowed');
/**
* home class
*/
class Exam_Controller extends CI_Controller
{
	/*construtor method*/
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'form']);
		$this->load->model('exam_Model');
		

	}

	public function index()
	{
		echo 'welcome to exam';
	}

	public function add()
	{
		
	}
}

	