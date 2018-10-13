<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alert extends CI_Controller {
	function __construct()
    {
        // Construct the parent class
		parent::__construct();
		
    }
	public function alert()
	{
		$this->load->view("layout/head");
		$this->load->view("layout/header");
		$this->load->view("user/alert/content");
		$this->load->view("layout/footer");
		$this->load->view("layout/foot");	
		$this->load->view("user/alert/script");
		
	}
	
}
