<?php

class Secret extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$user_id = $this->session->userdata('user_id');
		if ($user_id != NULL) {
			redirect('welcome/secret_softwer');
		}
	}
	public function index(){
		$this->load->view('secret/login');
	}


public function user_login(){
		$user_email = $this->input->post('user_name',true);
		$user_password = $this->input->post('user_password',true);
		$result = $this->welcome_model->user_login_info($user_email,$user_password);

		$sdata = array();
		if($result){

			$data = array();
			$sdata['user_name'] = $result->name;
			$sdata['user_id'] = $result->id;
			$this->session->set_userdata($sdata);
			redirect('welcome/secret_softwer');	
	}

	else{
		$sdata['exception'] = 'Youer user id and password invalid !';
		$this->session->set_userdata($sdata);
		redirect('secret');
	}
	}


	public function logout(){
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('user_name');
			$sdata = array();
			$this->session->set_userdata($sdata);
			redirect('secret');
	}




































	public function user_login_check(){
		$user_email = $this->input->post('email',true);
		$user_password = $this->input->post('password',true);
		//$this->load->model('user_model','a_model');
		$result = $this->welcome_model->login_from_check_info($user_email,$user_password);


		$sdata = array();
		if($result){

			$data = array();
			$sdata['name'] = $result->name;
			$sdata['id'] = $result->id;
			$this->session->set_userdata($sdata);
			redirect('welcome/softwer');

		
	}

	else{
		$sdata['exception'] = 'Youer user id and password invalid !';
		$this->session->set_userdata($sdata);
		redirect('secret');
	}
	}

}



?> 