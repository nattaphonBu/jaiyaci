<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
    {
        // Construct the parent class
		parent::__construct();

    }
	public function index()
	{
		$this->load->view("template/head");
		$this->load->view("template/headadmin");
    	$this->load->view("template/header");
    	$this->load->view("template/banner");
		$this->load->view('admin/userdata/content');
		$this->load->view("template/footUsermenu");
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view("admin/userdata/script");

	}
	public function update($_id,$username,$email,$tel)
	{
		$data = array(
			"id" =>$_id,
			"username"=>$username,
			"email" =>$email,
			"tel"=>$tel
		);
		$this->load->view("template/head");
		$this->load->view("template/headadmin");
		$this->load->view("template/banner");
		$this->load->view('admin/userdata/update/content',$data);
		$this->load->view("template/footUsermenu");
		$this->load->view("template/footer");
		$this->load->view("template/foot");	
		$this->load->view("admin/userdata/update/script");

	}

	public function update()
	{
		$this->load->view("template/headadmin");
    	$this->load->view("template/header");
    	$this->load->view("template/banner");
		$this->load->view('admin/userdata/update/content');
		$this->load->view("template/footer");
		$this->load->view("template/foot");
		$this->load->view("admin/userdata/update/script");


	}



}
