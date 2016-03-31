<?php 

/**
* 
*/
class Payroll_Model extends CI_Model
{
	protected $table = 'payroll';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function add($data)
	{
		$this->db->query("SET FOREIGN_KEY_CHECKS = 0");
		if ($this->db->insert($this->table,$data) === true)
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
		
		if($query->num_rows() >= 1)
		{
			return $query->result();	
		}
		else
		{
			return FALSE;
		}

		
	 }
	
}

 ?>