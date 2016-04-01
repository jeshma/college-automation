<?php 
/**
* 
*/
class Semester_Subject_Model extends CI_Model
{
	
	protected $table = 'semester_subject';
	protected $fields = [
		'semester_subject.id',
		'semester_subject.subject_id',
		'semester_subject.semester_id',
		// 'subject.id as subject_id',
		'subject.name as subject_name',
		'semester.id as semester_id',
		'semester.name as semester_name'
	];

	public function __construct()
	{
		$this->load->database();
	}

	public function add($data)
	{
		if ($this->db->insert('semester_subject',$data)=== true)
	    {
				return $this->db->insert_id();
		}
		else
		{
			return FALSE;
		}
	}

	public function get_join($where)
	{
		$this->db->select($this->fields);
		$this->db->from($this->table);
		$this->db->order_by('');
		$this->db->where($where);
		$this->db->join('subject','subject.id = '.$this->table.'.subject_id');
		$this->db->join('semester','semester.id = '.$this->table.'.semester_id');
		$query = $this->db->get();
		// var_dump($this->db->get_compiled_select($this->table));
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		else
			return FALSE;

	}

	public function view_all()
	{
		$result=$this->db->get('semester_subject');
		if($result->num_rows()>=1)
		{
			return $result->result();
		}
		else
		{
			return FALSE;
		}
	}

	public function view_where($where)
	{
		$this->db->where($where);
		$query=$this->db->get('semester_subject');
		if ($query->num_rows()>0)

		{
			return $query->result();
		}
		else
		{
			return FALSE;
		}
	}

	public function update($id,$data)
	{
		$update=$this->db->update('semester_subject',$data);
		if($update)
		{
			return TRUE;
		}
		else
			return FALSE;
	}

	public function delete($id)
	{
		$this->db->where('id',$id);
		if($this->db->delete('semester_subject') === TRUE)
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