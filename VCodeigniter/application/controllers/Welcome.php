<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


		//constructor start

		function __construct()

		{
			parent::__construct();

			$this->load->model("Welcome_model");
			$this->load->library("session");

		}

	//constructor end

		public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('content');

		$this->load->view('footer');
		
	}
		
		public function about()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('about');
		$this->load->view('footer');
		
	}

	public function signup()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('signup');
		$this->load->view('footer');
	}

	public function saveuser()
	{
		$firstname = $_POST['firstname'];

		$lastname = $_POST['lastname'];

		$email = $_POST['email'];

		$mobile = $_POST['mobile'];

		$password = $_POST['password'];

		$gender = $_POST['gender'];

		$address = $_POST['address'];

		$pincode =$_POST['pincode'];

		$state = $_POST['state'];

		$city =$_POST['city'];

		$data = array(
						"firstname"=>$firstname,
						"lastname"=>$lastname,
						"email"=>$email,
						"mobile"=>$mobile,
						"password"=>$password,
						"gender"=>$gender,
						"address"=>$address,
						"pincode"=>$pincode,
						"state"=>$state,
						"city"=>$city
					                     );

	$this->Welcome_model->savemyuser($data);


		header("Location:signup");


	}

	public function login()
	{

		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('login');
		$this->load->view('footer');

	}

	public function usercheck()
	{
		$email = $_POST['email'];
		$password = $_POST['password'];

		$status =$this->Welcome_model->usercheck($email,$password);

		if ($status==true)

		 {
			header("Location:".BASEURL."index.php/user/index");
		}
		else
		{
			$this->session->set_flashdata("msg","INVALID LOGIN..!!");
			header("Location:login");
		}

	}


	public function search()
	{

		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('search');
		$this->load->view('footer');

	}



	public function postblog()
	{

		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('postblog');
		$this->load->view('footer');

	}






}

?>
