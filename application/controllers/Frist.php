<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frist extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function index()
	{
		echo "Hello world Codeigniter";

	}

	public function test()
	{
		echo "Test function show";		
	}

	public function viewExample()
	{
		$this->load->view('frist');		
	}

	public function addData()
	{
		$data = array(
			'roll_no' => '1',
			'Name' => 'Thinh'
		);
		$this->db->insert('stud', $data);
		echo "Da add data thanh cong";		
	}
	public function updateData()
	{
		$data = array(
			'roll_no' => '1',
			'Name' => 'Jack'
		);
		$this->db->set($data);
		$this->db->where('roll_no', '1');
		$this->db->update("stud", $data);
		echo "Update thanh cong";
	}
	public function deleteData()
	{
		$this->db->delete('stud', "roll_no = 1");
		echo "Xoa thanh cong";
	}
	public function getData()
	{
		$query = $this->db->get('stud');
		$data['records'] = $query->result();
	}
	public function __destruct()
	{
		$this->db->close();
	}
}

/* End of file Frist.php */
/* Location: ./application/controllers/Frist.php */