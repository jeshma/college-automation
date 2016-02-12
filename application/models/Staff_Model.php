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
		if ($this->db->insert($this->table,$data))
		{
			return $this->db->insert_id();
		}
		else
		{
			return FALSE;
		}
	}
}