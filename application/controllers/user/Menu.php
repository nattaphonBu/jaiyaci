<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {
	function __construct()
    {
        // Construct the parent class
		parent::__construct();
		
    }
	public function menu()
	{
		// $this->load->view("template/head");
		// $this->load->view("template/header");
		// $this->load->view("template/headUsermenu");
		
		// $this->load->view("user/menu/content");
		// $this->load->view("template/foot");
		// $this->load->view("template/footer");
		
		// $this->load->view("template/footUsermenu");	
		// $this->load->view("user/menu/script");
		$this->load->view("template/head");
		$this->load->view("template/header");
		$this->load->view("template/banner");
		$this->load->view("template/headUsermenu");
		$this->load->view("user/menu/content");
		// $this->load->view('user/hospital/content');
		$this->load->view("template/footUsermenu");
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view("user/menu/script");
		
	}
	
}
