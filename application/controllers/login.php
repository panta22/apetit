<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('head');
		$this->load->view('body+');
		$this->load->view('header.php');
		$this->load->view('footer.php');
		$this->load->view('body-.php');
		$this->load->view('html-.php');
		$this->load->view('navbar.php');
		
	}
}
