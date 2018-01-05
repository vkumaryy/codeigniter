<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	//constructor start

		function __construct()

		{
			parent::__construct();

			$this->load->model("Welcome_model");
			$this->load->library("session");

			if ($this->session->userdata("ID")=="")

			{
				$this->session->set_flashdata("msg","please login first !");
				header("Location:".BASEURL."index.php/welcome/login");
			}

		}

	//constructor end
	
	public function index()
	{
		$this->load->view('myuser/header');
		$this->load->view('home');
		$this->load->view('content');

		$this->load->view('footer');
	}

	public function logout()
	{
		$data = array("ID"=>"","NAME"=>"");
		$this->session->set_userdata($data);
		$this->session->set_flashdata("msg","logout successfully!");
		header("Location:".BASEURL."index.php/welcome/login");
	}


	public function about()
	{
		$data['userdata']=$this->Welcome_model->getabout();
		$this->load->view('myuser/header');
		$this->load->view('myuser/about',$data);
		$this->load->view('footer');
	}
	
	public function edit ()
	{
		$data['userdata']=$this->Welcome_model->getabout();
		$this->load->view('myuser/header');
		$this->load->view('myuser/edituser',$data);
		$this->load->view('footer');
	}

	public function updateuser()
	{
		$name=$_POST['fname'];
		
		$mobile=$_POST['mobile'];

		$email=$_POST['email'];

		$password= $_POST['password'];

		$this->Welcome_model->updateuser($name,$email,$mobile,$password);

		header("Location:about");
	}


}
