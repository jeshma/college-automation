<?php 

/**
* 
*/
class Payroll_Model extends CI_Model
{
	protected $table = 'payroll';

    protected $fields = [
        'payroll.date',
        'payroll.amount',
        'staff.name'
    ];
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

	 public function view_all()
	 
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

	 public function view($where)
    {
    	$this->db->where(['staff_id'=>$where]);
		$result = $this->db->get('payroll');
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
        $result = $this->db->query("SELECT payroll.id, payroll.date, payroll.amount, staffs.name FROM payroll JOIN staffs ON staffs.id = payroll.staff_id WHERE year(date) = year(current_date) AND month(date) = month(current_date);");
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }


 }
	
