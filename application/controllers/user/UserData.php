<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserData extends CI_Controller {
	function __construct()
    {
        // Construct the parent class
		parent::__construct();
		
    }
    public function index(){
		$this->load->view("template/head");
		$this->load->view("template/header");
		$this->load->view("template/banner");
		$this->load->view('admin/userData/content');
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view("admin/userData/script");
        
    }
	public function insert()
	{
		$this->load->view("template/head");
		$this->load->view("template/header");
		$this->load->view("template/banner");
		$this->load->view('user/userData/create/content');
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view("user/userData/create/script");
	}
	
	public function update()
	{
		$this->load->view("template/head");
		$this->load->view("template/header");
		$this->load->view("template/banner");
		$this->load->view('user/userData/update/content');
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view("user/userData/update/script");

		
	}
	
}
