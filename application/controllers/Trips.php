<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Trips extends CI_Controller {

	public function show()
	{
		// $others_trips = $this->Trip->get_others_trips();
		$my_trips = $this->Trip->get_my_trips();
		$user = $this->Trip->get_user_info();
		$this->load->view('/dashboard', array("user"=>$user, "my_trips"=>$my_trips));
	}
	public function show2()
	{
		$this->load->view('/add_travelp');
	}
	
	public function create(){
	if($this->Trip->create($this->input->post())){
			redirect('/dashboard');
		} else {
			redirect('/add_travelp');
		}
	}
	
	public function logout_user() {
		$this->session->sess_destroy();
		redirect('/');
	}
	public function trip_view($id)
	{
		$trip_data = $this->Trip->get_trip_data($id);
		// $trip_v = $this->Trip->get_trip_users($id);
		$this->load->view('/trip_view', array("trip_data"=>$trip_data));
	}
	public function vote($id)
	{
		$this->Trip->vote($id);
		return redirect('/dashboard');
	}

}
?>