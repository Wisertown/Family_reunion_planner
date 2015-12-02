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
		redirect('/admindash');
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
		$useredits = $this->User->get_users_ad();
		$this->load->view('/admindash', array("useredits"=>$useredits));
	}
	public function delete()
	{
		if($this->User->delete($this->input->post())){
			redirect('/admindash');
		}else{
			redirect('/admindash', $this->session->set_flashdata("errors", "error deleting this user, You can't"));
		}

	}
	public function edit($id)
	{
		$edit = $this->User->get_user_info($id);
		$this->load->view('/edituser', array("edit"=>$edit));
	}

	public function user_update($post){
		$this->User->user_update($this->input->post());
		redirect('/admindash', $this->session->set_flashdata("success", "User has been updated!"));
	}
}
?>