<?php 
 

 /**
 * 
 */
 class Subject_Controller extends CI_Controller
 {
 	
 	public function __construct()
 	{
 		parent::__construct();
 		$this->load->helper(['url','form']);
 		$this->load->library('form_validation');
 		$this->load->Model('Subject_Model');
 	}

 	public function index()
	{
		$data['$result']=$this->Subject_Model->get_all();
		$this->load->view('admin/add_subject');
	}

 	public function add()
	{
		$this->form_validation->set_rules('name','Name','required');
	


		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('admin/add_subject');
		}
		else
		{
	 		$name = $this->input->post('name');
	 		$id = $this->input->post('id');

	 		$data = ['name'=>$name];
	 					
	 		$subject_id = $this->Subject_Model->add($data);
			
			if($subject_id != FALSE)
			{
				$data = [
					'subject_id' => $subject_id,
					'semester_id' => $id
				];
				// $data['message'] = '<script type="text/javascript">
				// 						alert("adding success");
				// 						window.location = "'.$_SERVER["HTTP_REFERER"].'"
				// 					</script>';
				// $this->load->view('admin/add_subject',$data);
			}
			else
			{
				$data=['error' => 'insertion failed'];
			    $this->load->view('admin/add_subject',$data);
			}
		
	}	}

 }

 ?>