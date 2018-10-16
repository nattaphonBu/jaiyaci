<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {
	function __construct()
    {
        // Construct the parent class
		parent::__construct();
		
    }
	public function menu()
	{	
		$this->load->view("template/headUsermenu");
		$this->load->view("template/head");
		$this->load->view("template/headadmin");
		$this->load->view("template/banner");
		$this->load->view("admin/menu/content");
		$this->load->view("template/footUsermenu");
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view("admin/menu/script");
		
	}
	
}
