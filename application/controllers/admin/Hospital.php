<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hospital extends CI_Controller {
	function __construct()
    {
        // Construct the parent class
		parent::__construct();
		
	}
	public function update()
	{
		$this->load->view("template/head");
		$this->load->view("template/header");
		$this->load->view("template/banner");
		$this->load->view('admin/hospital/update/content');
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view("admin/hospital/update/script");

		
	}
	public function insert()
	{
		$this->load->view("template/head");
		$this->load->view("template/header");
		$this->load->view('admin/hospital/create/content');
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view("admin/hospital/create/script");

		
	}
	
	
}
