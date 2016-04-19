<?php 

/**
* 
*/
class Semester_Subject_Controller extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url','form']);
		$this->load->library('form_validation');
		$this->load->Model('Semester_Subject_Model');

	}
	
		public function add()
		{
			$this->form_validation->set_rules('subjects', 'Subject', 'required',['required' => 'Please select subjects']);

			$semester_id = $this->input->post('semester_id');

			if($this->form_validation->run()===FALSE)
			{
				$where = ['id' => $id];
				$result = $this->Semester_Model->get_where($where);
				$subjects = $this->Subject_Model->get_all();
				$data['id'] = $id;
				$data['result'] = $result;
				$data['subjects'] = $subjects;
				$this->load->view('admin/view_semester',$data);
			}
			else
			{

				$subject_id = $this->input->post('subjects');
				$data = [
					'subject_id' => $subject_id,
					'semester_id' => $semester_id
				];
				if ($this->Semester_Subject_Model->add($data)) {
					$data['message'] = '<script>
 											alert("adding success.")
 											window.location = "' . base_url("dashboard/department/course/semester/view/{$semester_id}") . '";
 										</script>';
 					$this->load->view('admin/view_semester', $data);
				}
			}
		}

		public function delete($id)
		{

		if($this->Semester_Subject_Model->delete($id))
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

 