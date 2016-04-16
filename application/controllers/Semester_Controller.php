<?php 

/**
* 
*/
require_once(APPPATH.'controllers/Check_Logged.php');
class Semester_Controller extends Check_Logged
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url','form']);
		$this->load->library(['form_validation', 'table']);
		$this->load->Model('Semester_Model');
		$this->load->Model('Course_Model');
		$this->load->Model('Semester_Subject_Model');
		$this->load->Model('Subject_Model');
	}

	public function index()
	{
		$data['$result']=$this->Semester_Model->get_all();
		$this->load->view('admin/add_semester');
	}

	 public function view($id)
	{
		$where = ['id' => $id];

		$data['id'] =$id;
		$result = $this->Semester_Model->get_where($where);
		$new_subjects = $this->Subject_Model->get_all();

		$where = ['semester_id' => $id];
		$subjects = $this->Semester_Subject_Model->get_join($where);

		// $this->table->set_heading('id','name','subjects');
		// foreach ($result as $key => $value) {
		// 			$this->table->add_row($value->id, $value->name);
		// 		}		
		// $data['result'] = $this->table->generate();
		$data['result'] = $result;
		$data['subjects'] = $new_subjects;
		$data['current_subject'] = $subjects;
		$this->load->view('admin/view_semester',$data);
	}

	public function add()
	{
		$this->form_validation->set_rules('name','Name','required');

		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('admin/add_semester');
		}
		else
		{
	 		$name = $this->input->post('name');
	 		$id = $this->input->post('id');

	 		$data = [
	 					'name'=>$name,
	 					'cources_id'=>$id
	 				];
	 					
	 		$query= $this->Semester_Model->add($data);
			
			if($query != FALSE)
			{
				$data['message'] = '<script type="text/javascript">
										alert("adding success");
										window.location = "'.$_SERVER["HTTP_REFERER"].'"
									</script>';
				$this->load->view('admin/add_semester',$data);
			}
			else
			{
				$data=['error' => 'insertion failed'];
			    $this->load->view('admin/add_semester',$data);
			}
		
	}	}


		public function delete($id)
		{

		if($this->Semester_Model->delete($id))
		{

			redirect($_SERVER['HTTP_REFERER']);
		}
		else
		{
			var_dump('fail');
		}
	

	    }
	}


 ?>