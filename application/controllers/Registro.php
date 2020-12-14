<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {

	
	public function index()
	{
		$this->load->view('layouts/header');
		$this->load->view('registro');
		$this->load->view('layouts/footer');
    }
   /*  public function welcome(){
        echo '<h1>Welcome</h1>';
	} */

	public function addUser()
	{
		 $this->registro_Model->addUser();
		$this->load->view('layouts/header');
		$this->load->view('registro');
		$this->load->view('layouts/footer'); 

		if($this->input->post('name')==null){
			echo "error";
		}
		else{
			$name = $_POST['name'];
			$Email = $_POST['Email'];
			$cellphone = $_POST['cellphone'];
			$password = $_POST['password'];
			$userData = array('name'=>$name,'Email'=>$Email,'cellphon'=>$cellphone,'password'=>$password);

			$this->registro_Model->addUser($userData);
			$redirect = base_url(). "/home";
			header("location:$redirect");
		}
    }
	

}
