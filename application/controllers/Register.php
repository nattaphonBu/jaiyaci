<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	function __construct()
    {
        // Construct the parent class
		parent::__construct();
		
    }
    public function index()
	{
		// $this->load->view("admin/layout/head");
		// $this->load->view("admin/layout/left-menu");
		// $this->load->view("admin/layout/header");
		// $this->load->view("admin/car/content");
		// $this->load->view("admin/layout/footer");
		// $this->load->view("admin/layout/foot");	
        // $this->load->view("admin/car/script");
        $this->load->view("register/register");
	}
}