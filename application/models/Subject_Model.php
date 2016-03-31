<?php  


/**
* 
*/
class Subject_Model extends CI_Model
{
	protected $table = 'subject';

	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		
	}

	public function get_all()
	{
		$query = $this->db->get($this->table);

		if($query->num_rows() > 0)
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
		if($this->db->insert($this->table,$data))
		{
			return $this->db->	insert_id();
		}
		else
		{
			return FALSE;
		}
	}
}

?>