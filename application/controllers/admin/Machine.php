<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Machine extends CI_Controller {
	function __construct()
    {
        // Construct the parent class
		parent::__construct();
		
    }
	public function insert()
	{
		$this->load->view("template/headUsermenu");
		$this->load->view("template/head");
		$this->load->view("template/headadmin");
		$this->load->view("template/banner");
		$this->load->view('admin/machine/create/content');
		$this->load->view("template/footUsermenu");
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view('admin/machine/create/script');
	}
	public function index()
	{
		$this->load->view("template/headUsermenu");
		$this->load->view("template/head");
		$this->load->view("template/headadmin");
		$this->load->view("template/banner");
		$this->load->view('admin/machine/content');
		$this->load->view("template/footUsermenu");
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view('admin/machine/script');
	}
	public function checkMachine(){
		$this->load->view("template/headUsermenu");
		$this->load->view("template/head");
		$this->load->view("template/headadmin");
		$this->load->view("template/banner");
		$this->load->view('admin/machine/checkmachine/content');
		$this->load->view("template/footUsermenu");
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view('admin/machine/checkmachine/script');
	}
	
}
