<?php
class Register_controller extends CI_Controller
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('Register_model'); ///load model
	}

	public function index()
	{

		if($this->input->post('register'))
		{
		$id=$this->input->post('id');	
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$status=$this->input->post('status');
		$password=$this->input->post('password');
		$address=$this->input->post('address');
		$gender=$this->input->post('gender');
		$created_at=$this->input->post('created_at');
		$updated_at=$this->input->post('updated_at');

		$this->Register_model->insert_data($id,$name,$email,$status,$password,$address,$gender,$created_at,$updated_at);

	}else{
	$this->load->view('registration_view');
	}
	}
}
?>