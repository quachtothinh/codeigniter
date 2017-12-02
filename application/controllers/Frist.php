<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frist extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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

}

/* End of file Frist.php */
/* Location: ./application/controllers/Frist.php */