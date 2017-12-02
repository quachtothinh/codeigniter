<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stud_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function update($data, $old_roll_no)
	{
		$this->db->set($data);
		$this->db->where('roll_no', $old_roll_no);
		$this->db->update('stud', $data);
	}
	public function delete($roll_no)	
	{
		if($this->db->delete('Stud', "roll_no = $roll_no"))
		{
			return true;
		}
	}
	public function add($data)
	{
		if($this->db->insert('Stud', $data))
		{
			return true;
		}
	}


}

/* End of file Stud_model.php */
/* Location: ./application/models/Stud_model.php */