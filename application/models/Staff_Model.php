	<?php 

/**
* 
*/
class Staff_Model extends CI_Model
{
	
	protected $fields = [
        'staffs.id',
        'staffs.name',
        'staffs.address',
        'departments.name as department_name'
    ];

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	/**
	*@return mixed
	*/
	public function view_all()
	{
        $this->db->select($this->fields);
        $this->db->join('departments','staffs.departments_id = departments.id');
		$result = $this->db->get('staffs');
		if ($result != FALSE)
		
		{
		if($result->num_rows() >=1)
		{
			return $result->result();	
		}
		else
		{
			return FALSE;
		}
	   }
	   else
	   {
	   	  return FALSE;
	   }
	}

	public function view_where($where)
	{
		$this->db->where($where);
		$result = $this->db->get('staffs');
		if($result->num_rows() >= 1)
		{
			return $result->result();
			
		}
		else
		{
			return FALSE;
		}

    }
 
	/**
	* @param array $data
	* @return mixed
	*/
	public function add($data)
	{
		 $this->db->query("SET FOREIGN_KEY_CHECKS = 0");
		if ($this->db->insert('staffs',$data) === true)
		{ 
			return $this->db->insert_id();
		}
		else
		{
			return FALSE;
		}
		
	}
	
	public function edit($where, $data)
	{
		$this->db->where($where);
		$update=$this->db->update('staffs', $data);
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
	 	$this->db->query("SET FOREIGN_KEY_CHECKS = 0");
	    $this->db->where('id',$id);
		if($this->db->delete('staffs') === TRUE)
			
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}


    }

    public function view($where)
    {
    	$this->db->where($where);
		$result = $this->db->get('staffs');
		if($result->num_rows() >= 1)
		{
			return $result->result();
			
		}
		else
		{
			return FALSE;
		}
    }

}