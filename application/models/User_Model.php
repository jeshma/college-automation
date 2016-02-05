<?php 

/**
* 
*/
class User_Model extends CI_Model
{
	
	protected $table = 'userlogin';

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}


	public function login($username,$password)
	{

		$where = ['user_name' => $username, 'password' => $password];

		$this->db->where($where);
        $query = $this->db->get($this->table);
        if ($query->num_rows() > 0)
            return TRUE;

        else
            return FALSE;
	}
}

 ?>