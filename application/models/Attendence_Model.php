<?php 

/**
* 
*/
class Attendence_Model extends CI_Model
{
	protected $table = 'staffattend';

	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['url', 'form']);
		$this->load->database();
	}


	public function view_all()
	{
		$result = $this->db->get($this->table);
		if($result->num_rows() >= 1)
		{
			return $result->result();
			
		}
		else
		{
			return FALSE;
		}
	}


    public function get_last_month()
    {
        $result = $this->db->query("SELECT staffattend.id, staffattend.attendance, staffattend.date, staffs.name FROM staffattend JOIN staffs ON staffs.id = staffattend.staff_id WHERE year(date) = year(current_date) AND month(date) = month(current_date);");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

	public function view_where($where)
	{
		$this->db->where($where);
		$result = $this->db->get($this->table);
		if($result->num_rows() >= 1)
		{
			return $result->result();
			
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

				return $this->db->insert_id();
			 	
			 }
	}

	public function edit($where, $data)
	{
		$this->db->where($where);
		$update=$this->db->update($this->table, $data);
		if($update)
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
    	$this->db->where(['staff_id'=>$where]);
		$result = $this->db->get('staffattend');
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