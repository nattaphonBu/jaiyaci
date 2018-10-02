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
<<<<<<< HEAD
		$this->load->view('register/register');
		$this->load->view("layout/footer");
		$this->load->view("layout/foot");	
		$this->load->view("register/script");
=======
		$this->load->view('menu/content');
		$this->load->view("layout/footer");
		$this->load->view("layout/foot");	
		$this->load->view("menu/script");
>>>>>>> bc00f5cf6a2193981af255f2e50f5d0144a81bc4
		
	}
	
}
