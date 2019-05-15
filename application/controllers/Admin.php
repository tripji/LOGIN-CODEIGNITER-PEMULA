<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();

		$this->load->library('template');
		
		if($this->session->userdata('status') != "login") {
			redirect(base_url("login"));
		}
	}

	public function index(){
    	$this->template->utama('content/dashboard');
	}

	public function about(){
    	$this->template->utama('content/about');
	}

	# public function index()
	#{
	#	$data = array('base_url' => base_url() );
	#	$this->load->view('head', $data);
	#	$this->load->view('menu', $data);
	#	$this->load->view('content', $data);
	#	$this->load->view('scroll-top', $data);
	#	$this->load->view('footer', $data);
	#	$this->load->view('logout-modal', $data);
	#	$this->load->view('ending', $data);
	#} 
}