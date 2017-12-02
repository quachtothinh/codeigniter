<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stud_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		
	}

	public function index()
	{
		$query = $this->db->get('stud');
		$data['records'] = $query->result();

		$this->load->view('Stud_view', $data);
	}
	public function updateStud_view()
	{	
		$this->load->helper('form');
		$roll_no = $this->uri->segment(3);

		$query = $this->db->get_where('stud', array(
			'roll_no' => $roll_no
		));
		$data['records'] = $query->result();
		$data['old_roll_no'] = $roll_no;


		$this->load->view('Stud_edit', $data);

	}
	public function updateStud()
	{	

		
		$this->load->helper('form');
		$old_roll_no = $this->input->post('old_roll_no');
		$roll_no = $this->input->post('roll_no');
		$name = $this->input->post('name');

		$data = array(
			'roll_no' => $roll_no,
			'name' => $name
		);

		$this->load->model('Stud_model');
		$this->Stud_model->update($data, $old_roll_no);

		$query = $this->db->get('Stud');
		$data['records'] = $query->result();

		$this->load->view('Stud_view', $data);

	}
	
	public function deleteStud()
	{
		$this->load->model('Stud_model');
		$roll_no = $this->uri->segment(3);
		if($this->Stud_model->delete($roll_no))
		{
			$query = $this->db->get('Stud');
			$data['records'] = $query->result();
			$this->load->view('Stud_view', $data);
		}
	}
	public function addStud_view()
	{
		$this->load->helper('form');
		$this->load->view('Stud_add');
	}
	public function addStud()
	{
		$roll_no = $this->input->post('roll_no');
		$name = $this->input->post('name');

		$data = array(
			'roll_no' => $roll_no,
			'name' => $name
		);
		$this->load->model('Stud_model');
		if($this->Stud_model->add($data))
		{
			$query = $this->db->get('Stud');
			$data['records'] = $query->result();
			$this->load->view('Stud_view', $data);
		}


	}

}

/* End of file Stud_controller.php */
/* Location: ./application/controllers/Stud_controller.php */