<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct()
    {
        // Construct the parent class
		parent::__construct();
		
    }
	
	public function index()
	{
		$this->load->view("template/head");
		$this->load->view("template/headerLogin");
		$this->load->view("template/banner");
		$this->load->view('login/content');
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view("login/script");
	}
	
}
