<?php
class Register_model extends CI_Model
{
	function insert_data($id,$name,$email,$status,$password,$address,$gender,$created_at,$updated_at)
	{
	
		$query=$this->db->query("insert into users(id,name,email,status,password,address,gender,created_at,updated_at)
								 values($id,'$name','$email','$status','$password','$address','$gender','$created_at','$updated_at');";
								 
								 

		$data['message']="<h3 style='color:blue'>You are registered successfully</h3>";
		

		$this->load->view('registration_view',@$data);
		}

	}
?>