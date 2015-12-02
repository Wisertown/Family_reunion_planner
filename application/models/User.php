<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	public function register($post)
	{
		{
			$this->form_validation->set_rules("name", "Name", "trim|required");
			$this->form_validation->set_rules("username", "username", "trim|required|alpha");
			$this->form_validation->set_rules("password", "Password", "trim|required|min_length[6]");
			$this->form_validation->set_rules("pw_confirm", "Password Confirmation", "trim|required|matches[password]");

		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
		} else {
	        $query = "INSERT INTO users(name, username, password, created_at,updated_at, admin_id)  VALUES (?,?,?, NOW(), NOW(), ?)";
	        $values = array($post['name'],$post['username'],$post['password'], $this->session->userdata('id'));
	        $this->db->query($query,$values);
	        $this->session->set_flashdata('success_message', '<p id="sucess">You have registered succesfully, please login</p>');
		}
		}
	}
	
	public function login($post)
	{
		$this->form_validation->set_rules("username", "Username", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		// END VALIDATION RULES
		if($this->form_validation->run() === FALSE) {
		     $this->session->set_flashdata("errors", validation_errors());
		     return FALSE;
		} else {
			$query = "SELECT * FROM users WHERE username = ? AND password = ?";
			$values = array($post['username'], $post['password']);
			$user = $this->db->query($query, $values)->row_array();
			if(empty($user)) {
				$this->session->set_flashdata("errors", "<p id='error'>The username or password you entered is invalid.</p>");
				return FALSE;
			} else {
				$this->session->set_userdata('id', $user['id']);
				return TRUE;
			}
		}
	}
	public function adminlogin($post)
	{
		$this->form_validation->set_rules("username", "Username", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		if($this->form_validation->run() === FALSE) {
		     $this->session->set_flashdata("errors", validation_errors());
		     return FALSE;
		} else {
			$query = "SELECT * FROM admin WHERE username = ? AND password = ?";
			$values = array($post['username'], $post['password']);
			$user = $this->db->query($query, $values)->row_array();
			if(empty($user)) {
				$this->session->set_flashdata("errors", "<p id='error'>The username or password you entered is invalid.</p>");
				return FALSE;
			} else {
				$this->session->set_userdata('id', $user['id']);
				return TRUE;
			}
		}
	}
	public function get_users_ad(){
		$query = "SELECT users.id, users.name, users.username, users.password, users.created_at, users.updated_at, users.votes, users.switch, users.pswitch, users.admin_id, admin.username as admin from users join admin on users.admin_id = admin.id;";
		return $this->db->query($query)->result_array();
	}
	public function delete($post){
		$query = "DELETE from users where users.id = ?";
		$values = array($post);
		return $this->db->query($query, $values);
	}
	public function get_user_info($id){
		$query = "SELECT * from users where users.id =?";
		$values = array($id);
		return $this->db->query($query, $values)->row_array();
	}
	public function user_update($post)
	{
		$this->form_validation->set_rules("name", "Name", "trim|required");
		$this->form_validation->set_rules("username", "username", "trim|required|alpha");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[6]");
		$this->form_validation->set_rules("votes", "votes", "trim|required|numeric");
		$this->form_validation->set_rules("switch", "switch", "trim|required|numeric");
		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('errors', validation_errors());
		} else {
			$query = "UPDATE users set name = ?, username = ?, password = ?, updated_at = NOW(), votes = ?, switch = ? where users.id = ?";
			$values = array($post['name'], $post['username'], $post['password'], $post['votes'], $post['switch'], $post['id']);
			return $this->db->query($query, $values);
		}
	}
}


?>