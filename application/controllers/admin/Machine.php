<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Machine extends CI_Controller {
	function __construct()
    {
        // Construct the parent class
		parent::__construct();
		
    }
	public function insert()
	{
<<<<<<< HEAD
		$this->load->view("template/head");
		$this->load->view("template/header");
=======
		$this->load->view("template/headadmin");
		$this->load->view("template/header");
		$this->load->view("template/banner");
>>>>>>> a6d874bbb661fe7990d4d989afc7a5acace5d7e4
		$this->load->view('admin/machine/create/content');
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
	}
	public function index()
	{
		$this->load->view("template/headadmin");
		$this->load->view("template/header");
		$this->load->view("template/banner");
		$this->load->view('admin/machine/content');
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
	}
	public function checkMachine(){
		$this->load->view("template/head");
		$this->load->view("template/header");
		$this->load->view('admin/machine/content');
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
	}
	
}
