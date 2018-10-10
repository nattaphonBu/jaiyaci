<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Timetogetpillow extends CI_Controller {
	function __construct()
    {
        // Construct the parent class
		parent::__construct();
		
    }
    public function index(){
        
    }
	public function insert()
	{
		$this->load->view("user/layout/head");
		$this->load->view("user/layout/header");
		$this->load->view('user/Timetogetpillow/create/content');
		$this->load->view("user/layout/footer");
		$this->load->view("user/layout/foot");	
		$this->load->view("user/Timetogetpillow/create/script");
	}
	

	
}
