<?php

defined ('BASEPATH') OR exit ('No direct script allowed');

class Welcome_model extends CI_Model {
	
	var $db;
	function __construct()
	{
	parent::__construct();
	$this->db = $this->load->database("default",TRUE);
	}

	public function savemycontact($data)
	{
	//$this->db-insert ("table_name", data_array_name);
	  $this->db->insert ("contactus",$data);
	  return true;
	}

	public function savemyuser($data)
	{
		$this->db->insert("signup",$data);
		return true;
	}

	public function getallcontact()
	{
		$res = $this->db->query("select * from contactus");
		return $res->result();//all rows and column from table will return as object array 
	}

	public function getalluser()
	{
		$res = $this->db->query("select * from signup");
		return $res->result();

	}
	public function usercheck($email,$password)
	{
		$res= $this->db->query("select * from signup where email = '$email' and password= '$password'");

		if ($res->num_rows() >0)
		 {
		 	//creating session 
		 	$row = $res->row();// 1 row 

		 	$data = array("ID"=>$row->id, "FIRSTNAME"=>$row->firstname);

		 	$this->session->set_userdata($data); //to create session

			return true;

		}
		else
		{
			return false;
		}
	}

	public function getabout()
	{
		$userid =$this->session->userdata("ID");
		$res = $this->db->query->db->query("select * from signup where id = '$userid'");
		return $res->row();
	}

	public function updateuser($name,$email,$mobile,$password)
	{
		$userid =$this->session->userdata("ID");
		$sql = "update signup
				set 
				name = '$name',
				email = '$email',
				mobile = '$mobile',
				password = '$password'
				where id = '$userid'";
				
				$this->db->query($sql);
				return true;
	}



}//welcome class end




?>

