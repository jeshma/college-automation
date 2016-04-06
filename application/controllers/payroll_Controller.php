<?php 
defined('BASEPATH') OR exit('no direct script access allowed');
/**
* home class
*/
class Payroll_Controller extends CI_Controller

{
	/*construtor method*/
	public function __construct()
	
	{
		parent::__construct();
		$this->load->helper(['url', 'form']);
		$this->load->model('Payroll_Model');
		$this->load->library(['form_validation']);
		
	}

		public function index()

		{

		$data['result'] = $this->Payroll_Model->get_all();
		$this->load->view('admin/view_payroll',$data);
		}

		public function view($id)
		{

		$where = ['id' => $id];

		$data['id'] =$id;
		$data['result'] = $this->payroll_Model->get($where);
		$data['course']= $this->Staff_Model->get_where(['staff_id' => $id]);
		if ($data['result'] != FALSE)
		 {
			$this->load->view('admin/view_payroll',$data);
		}
		else
		{
			$data['message'] = 'No record found';
			$this->load->view('admin/view_payroll',$data);
		}

	}
	public function add()
	{
		$this->form_validation->set_rules('staffs','staffs','required');	
		$this->form_validation->set_rules('date','date','required');
		$this->form_validation->set_rules('amount','amount','required');	
		if($this->form_validation->run() === FALSE)		
		{
			
			$this->load->view('admin/Add_payroll');
		}
		else
		{

			$data=[

				'staff_id' => $this->input->post('staffs'),
				'date' => $this->input->post('date'),
				'amount' => $this->input->post('amount'), 
			];
		if ($this->Payroll_Model->add($data) != FALSE) 
			{

				$data['message'] = '<script type="text/javascript">
										alert("adding success");
										window.location = "'.base_url().'Admin_Controller/add_payroll"
									</script>';
				$this->load->view('admin/Add_payroll',$data);
			}
			else
			{
				$data=['error' => 'insertion failed'];
			    $this->load->view('admin/Add_payroll',$data);
			}

		}

	}
		public function delete($id)
		{

		if($this->Payroll_Model->delete($id))
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