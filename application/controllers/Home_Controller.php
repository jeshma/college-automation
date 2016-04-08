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
		$this->load->helper(['url', 'form']);
		$this->load->library(['form_validation']);
		$this->load->model('Application_Model');
	}


	public function index($page = 'index')
	{
		$this->load->view($page);
	}
    public function home($page = 'index')
    {
        $this->load->view($page);
    }

	public function about($page = 'about')
	{
		$this->load->view($page);
	}
	public function registration($page = 'regist')
	{
		$this->load->view($page);
	}
	public function application($page = 'application')
	{
		$this->load->view($page);

	}

    public function scholarship($page = 'scholarship')
    {
        $this->load->view($page);
    }

    public function contact($page = 'contact')
    {
        $this->load->view($page);
    }
	


	public function add_application()
	{
		 $this->form_validation->set_rules('name', 'Name', 'required');
		 $this->form_validation->set_rules('address', 'address', 'required');
		 $this->form_validation->set_rules('guardian', 'guardian', 'required');
		 $this->form_validation->set_rules('pin', 'pin', 'required');
		 $this->form_validation->set_rules('course', 'course', 'required');
		 $this->form_validation->set_rules('firstlang', 'first_lang', 'required');
		 $this->form_validation->set_rules('secondlang', 'second_lang', 'required');
		 $this->form_validation->set_rules('maths', 'maths', '');
		 $this->form_validation->set_rules('english', 'english', '');
		 $this->form_validation->set_rules('chemistry', 'chemistry', '');
		 $this->form_validation->set_rules('phisics', 'phisics', '');
		 $this->form_validation->set_rules('electronics', 'electronics', '');
		 $this->form_validation->set_rules('zoology', 'zoology', '');
		 $this->form_validation->set_rules('botony', 'botony', '');
		 $this->form_validation->set_rules('bussiness', 'bussiness', '');
		 $this->form_validation->set_rules('accounting', 'accounting', '');
		 $this->form_validation->set_rules('economics', 'economics', '');
		 $this->form_validation->set_rules('politics', 'politics', '');
		 $this->form_validation->set_rules('statistics', 'statistics', '');

		

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('application');
		}
		else
		{
			$name = $this->input->post('name');
			$address = $this->input->post('address');
			$guardian = $this->input->post('guardian');
			$pin = $this->input->post('pin');
			$course = $this->input->post('course');	
			$firstlang = $this->input->post('firstlang');
			$secondlang = $this->input->post('secondlang');
			$maths = $this->input->post('maths');
			$english = $this->input->post('english');
			$chemistry = $this->input->post('chemistry');
			$physics = $this->input->post('physics');
			$electronics = $this->input->post('electronics');
			$zoology = $this->input->post('zoology');
			$botony = $this->input->post('botony');
			$bussiness = $this->input->post('bussiness');
			$accounting = $this->input->post('accounting');
			$economics = $this->input->post('economics');
			$politics = $this->input->post('politics');
			$statistics = $this->input->post('statistics');

			$data = [
				'name' => $name,
				'address' => $address,
				'guardian_name'=> $guardian,
				'pin'=> $pin,
				'course'=> $course,
				'firstlang'=> $firstlang,
				'secondlang'=> $secondlang,
				'maths'=> $maths,
				'english'=> $english,
				'chemistry'=> $chemistry,
				'physics'=> $physics,
				'electronics'=> $electronics,
				'zoology'=> $zoology,
				'botony'=> $botony,
				'bussiness'=> $bussiness,		
				'accounting'=> $accounting,
				'economics'=> $economics,
				'politics'=> $politics,
				'statistics'=> $statistics,
				'status' => 'request'
			];
			$query= $this->Application_Model->add($data);
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