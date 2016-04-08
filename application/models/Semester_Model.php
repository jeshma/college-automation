<?php 

/**
* 
*/
class Semester_Model extends CI_Model
{
	protected $table = 'semester';

	
public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}
	public function add($data)
	{

		if($this->db->insert($this->table,$data) === true)
		{
			return $this->db->insert_id();
		}
		else
		{
			return FALSE;
		}
    }

    public function get_all()
    {
    	$query = $this->db->get($this->table);
    	if ($query->num_rows() > 0) {
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
    	$query = $this->db->get($this->table);
    	if ($query->num_rows() > 0) {
    		return $query->result();
    	}
    	else
    	{
    		return FALSE;
    	}
    }

     public function delete($id)
     {
        $this->db->query("SET FOREIGN_KEY_CHECKS = 0");
        $this->db->where('id',$id);
        if($this->db->delete('semester') === TRUE)
            
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