<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('home');
		$this->load->view('layouts/footer');
    }
    public function welcome(){
        echo '<h1>Welcome</h1>';
    }
}
