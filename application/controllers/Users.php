<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('/index');
	}
	public function register()
	{
		$this->User->register($this->input->post());
		redirect('/');
	}
	public function login()
	{
		if($this->User->login($this->input->post())){
			redirect('/dashboard');
		} else {
			redirect('/');
		}
	}
	public function admin()
	{
		$this->load->view('/admin');
	}
	public function adminlogin()
	{
		if($this->User->adminlogin($this->input->post())){
			redirect('/admindash');
		}else{
			redirect('/');
		}

	}
	public function show_ad()
	{
		$this->load->view('/admindash');
	}
	// public function showusers()
	// {
	// 	$useredits = $this->User->get_users_ad();
	// 	$this->load->view('admindash', array("useredits"=>$useredits));
	// }
}
?>