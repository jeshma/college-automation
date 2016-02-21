<?php 

/**
* 
*/
class Exam_Model extends CI_Model
{
	
protected $table = 'applications';

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'form']);
		$this->load->database();
	}


	public function view_all()
	{
		$result = $this->db->get($this->table);
		if($result->num_rows() >= 1)
		{
			return $result->result();
			
		}
		else
		{
			return FALSE;
		}
	}


	public function view_where($where)
	{
		$this->db->where($where);
		$result = $this->db->get($this->table);
		if($result->num_rows() >= 1)
		{
			return $result->result();
			
		}
		else
		{
			return FALSE;
		}
	}

	public function add($data)
	{
		if($this->db->insert($this->table,$data))
			 {

				return $this->db->insert_id();
			 	
			 }
	}

	public function edit($where, $data)
	{
		$this->db->where($where);
		$update=$this->db->update($this->table, $data);
		if($update)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

		public function delete($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete($this->table) === TRUE)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
	}
}

 ?>