<?php 

/**
* 
*/
class Staff_Model extends CI_Model
{
	
	protected $table = 'staffs';
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	/**
	* @param array $data
	* @return mixed
	*/
	public function add($data)
	{
		// $this->db->query("SET FOREIGN_KEY_CHECKS = 0");
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