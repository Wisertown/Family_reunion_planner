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
	        $query = "INSERT INTO users (name, username, password, created_at, updated_at) VALUES (?,?,?, NOW(), NOW())";
	        $values = array($post['name'],$post['username'],$post['password']);
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
}


?>