<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trip extends CI_Model {

	public function get_user_info()
	{
		$query = "SELECT users.name, users.switch, users.votes FROM users WHERE id = ?";
		$values = $this->session->userdata('id');
		return $this->db->query($query, $values)->row_array();
	}
	public function create($post)
	{
		$this->form_validation->set_rules("Link", "link", "trim|required");
		$this->form_validation->set_rules("place", "destination", "trim|required");
		$this->form_validation->set_rules("description", "description", "trim|required");
		$this->form_validation->set_rules("d_from", "date from", "trim|required");
		$this->form_validation->set_rules("d_to", "date to", "trim|required");
		if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata("errors", validation_errors());
			return FALSE;
		} else {
			$query2 = "INSERT INTO trips(place, description, link, d_from, d_to, created_by, created_at, updated_at) values(?, ?, ?, ?, ?, NOW(), NOW())";
			$values = array($post['place'], $post['description'], $post['d_from'], $post['d_to'], $this->session->userdata('id'));
			$this->db->query($query2, $values);

			$query = "INSERT INTO vacation(user_id, trip_id, place, description, d_from, d_to, added_by, created_at, updated_at) values(?, last_insert_id(), ?, ?, ?, ?, ?, NOW(), NOW())";
			$values = array($this->session->userdata('id'), $post['place'], $post['description'], $post['d_from'], $post['d_to'], $this->session->userdata('id'));
			$this->db->query($query, $values);

			$query33 ="UPDATE users set votes = votes-1, switch = switch+1 where users.id = ?";
			$values = array($this->session->userdata('id'));
			$this->db->query($query33, $values);
			return TRUE;
		}
	}
	// public function get_my_trips()
	// {
	// 	$query = "SELECT users.id, users.name, vacation.trip_id as va_id, vacation.id, vacation.place, vacation.d_from, vacation.d_to, vacation.description from users join vacation on users.id = vacation.user_id where vacation.user_id = ?"; 
	// 	$values = $this->session->userdata('id');
	// 	return $this->db->query($query, $values)->result_array();
	// }
	// public function get_others_trips()
	// {
	// 	$query = "SELECT users.id, users.name, vacation.id as va_id, vacation.trip_id as tr_id, vacation.place, vacation.d_from, vacation.d_to, vacation.description from users join vacation on users.id = vacation.user_id where users.id != ? group by vacation.trip_id"; 
	// 	$values = $this->session->userdata('id');
	// 	return $this->db->query($query, $values)->result_array();
	// }
	public function get_trip_users($id)
	{
		$query = "SELECT users.name, users.id, vacation.place, vacation.trip_id, vacation.added_by from users join vacation on users.id = vacation.added_by where vacation.trip_id = ?";
		$values = array($id);
		return $this->db->query($query, $values)->result_array();
	}
	public function get_trip_data($id)
	{
		$query3 = "SELECT users.name, vacation.id, users.id, vacation.place, vacation.trip_id, vacation.user_id, vacation.description, vacation.d_from, vacation.d_to from users join vacation on users.id = vacation.user_id where vacation.trip_id = ?";
		$values = array($id);
		return $this->db->query($query3, $values)->result_array();
	}
	public function join($id)
	{
		$query = "INSERT into vacation(user_id, trip_id, place, description, d_from, d_to, added_by, created_at, updated_at) SELECT trips.created_by, trips.id, trips.place, trips.description, trips.d_from, trips.d_to, ?, NOW(), NOW() From trips where trips.id = ?";
		$values = array($this->session->userdata('id'), $id);
		return $this->db->query($query, $values);
	}
}
?>