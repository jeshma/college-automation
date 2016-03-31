<?php 
/**
* 
*/
class Semester_Subject_Model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function add($data)
	{
		if ($this->db->insert('semester_subject',$data)=== true)
	    {
				return $this->db->insert_id();
		}
		else
		{
			return FALSE;
		}
	}

	public function view_all()
	{
		$result=$this->db->get('semester_subject');
		if($result->num_rows()>=1)
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
		$query=$this->db->get('semester_subject');
		if ($query->num_rows()>0)

		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}

	public function update($id,$data)
	{
		$update=$this->db->update('semester_subject',$data);
		if($update)
		{
			return TRUE;
		}
		else
			return FALSE;
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete('semester_subject') === TRUE)
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