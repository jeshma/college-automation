<?php 


/**
* 
*/
class Course_Model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_all()
	{
		$query = $this->db->get('courses');

		if($query->num_rows() > 0)
		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
		
	}


	public function get_where($where)
	{
		$this->db->where($where);
		$query = $this->db->get('courses');
		if ($query->num_rows()>0)

		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}

	}

	public function add($data)
	{

		$this->db->query("SET FOREIGN_KEY_CHECKS = 0");
		if($this->db->insert('courses',$data) === true)
		{
			return $this->db->insert_id();
		}
		else
		{
			return FALSE;
		}
    }

     public function delete($id)
	 {
	    $this->db->where('id',$id);
	    $this->db->query("SET FOREIGN_KEY_CHECKS = 0");
		if($this->db->delete('courses') === TRUE)
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