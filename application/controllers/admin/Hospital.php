<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hospital extends CI_Controller {
	function __construct()
    {
        // Construct the parent class
		parent::__construct();
		
    }
	public function insert()
	{
		$this->load->view("layout/head");
		$this->load->view("layout/header");
		$this->load->view('admin/hospital/create/content');
		$this->load->view("layout/footer");
		$this->load->view("layout/foot");	
		$this->load->view("admin/hospital/create/script");
		
	}
	
	
}
