<?php 

/**
* 
*/
class Department_Model extends CI_Model
{
	protected $table = 'departments';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function add($data)
	{
		if ($this->db->insert($this->table,$data) === true)
		{ 
			return $this->db->insert_id();
		}
		else
		{
			return FALSE;
	    }


	}	

}
 ?>