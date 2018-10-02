<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {
	function __construct()
    {
        // Construct the parent class
		parent::__construct();
		
    }
	public function menu()
	{
		$this->load->view("layout/head");
		$this->load->view("layout/header");
		$this->load->view('menu/content');
		$this->load->view("layout/footer");
		$this->load->view("layout/foot");	
		$this->load->view("menu/script");
		
	}
	
}
