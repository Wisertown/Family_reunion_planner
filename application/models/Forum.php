<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum extends CI_Model {

	public function create($post)
	{

		$this->form_validation->set_rules("subject", "subject", "trim|required");
		$this->form_validation->set_rules("post_data", "Post", "trim|required");
		if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata("errors", validation_errors());
			return FALSE;
		} else {
		$query = "INSERT into Posts(user_id, subject, post_data, created_at, updated_at) values (?,?,?, NOW(), NOW())";
		$values = array($this->session->userdata('id'), $post['subject'], $post['post_data']);
		$this->db->query($query, $values);

		$query2 = "UPDATE users set pswitch = pswitch +1 where users.id = ?";
		$values = array($this->session->userdata('id'));
		$this->db->query($query2, $values);
		return TRUE;
		}

	}
	public function get_all_posts()
	{
		$query = "SELECT users.id, users.name, posts.id as po_id, posts.subject, posts.post_data, posts.created_at, posts.user_id from users join posts on users.id = posts.user_id;";
		return $this->db->query($query)->result
	}
	public function get_user_info()
	{
		$query = "SELECT users.name, users.switch, users.pswitch, users.votes FROM users WHERE id = ?";
		$values = $this->session->userdata('id');
		return $this->db->query($query, $values)->row_array();
	}
}
?>
