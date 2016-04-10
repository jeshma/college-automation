<?php 

/**
* login class
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class User_controller extends Check_Logged
{
	/*construtor method*/
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('form');		
		$this->load->helper('url');	
		$this->load->library('form_validation');
		$this->load->library('session');
        $this->load->model('User_Model');	
	}


	public function index($page = 'login')
	{
		$this->load->view('admin/'.$page);
	}

	public function generate()
	{
		var_dump(APPPATH);
		var_dump(md5('admin'));
		var_dump(hash('sha512','admin'));
	}

	public function login()
	{	
		$this->load->view('admin/login');
	}


	public function verify_login()
	{
		$this->form_validation->set_rules('username', 'User name', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() === FALSE) 
		{
			$this->load->view('admin/login');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			
			$password = md5($password);
			if($this->User_Model->login($username, $password) === TRUE)
			{
				$userdata = [
					'user_name' => $username,
					'logged_in' => TRUE
				];
				$this->session->set_userdata($userdata);
				$this->load->view('admin/dashboard');
			}
			else
			{
				$data['message'] = 'invalid username or password';
				$this->load->view('admin/login',$data);
			}
		}
	}

	public function logout()
	{
    	$this->session->set_userdata('logged_in', FALSE);
    	$this->session->sess_destroy();
    	
    	redirect(base_url('login'));
	
	}
public function test()
{
	var_dump('kbjh');
}
	

}

 ?>
