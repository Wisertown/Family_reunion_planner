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

		$query2 = "UPDATE users set users.pswitch = users.pswitch +1 where users.id = ?";
		$values = array($this->session->userdata('id'));
		$this->db->query($query2, $values);
		return TRUE;
		}
	}
	public function get_all_posts()
	{
		$query = "SELECT users.id, users.name, posts.id as po_id, posts.subject, posts.likes_ as p_likes, posts.post_data, posts.created_at, posts.user_id, posts.c_ccount as c_count from posts join users on users.id = posts.user_id order by posts.likes_ desc";
		// $query2 = "SELECT posts.id as po_id, posts.subject, sum(comments.id) as total_comms from posts join comments on posts.id = comments.post_id;";
		return $this->db->query($query)->result_array();
		
	}
	public function get_user_info()
	{
		$query = "SELECT users.name, users.switch, users.pswitch, users.votes FROM users WHERE users.id = ?";
		$values = $this->session->userdata('id');
		return $this->db->query($query, $values)->row_array();
	}
	public function comm_create($post, $id)
	{	
		$this->form_validation->set_rules("comment_data", "comment_data", "trim|required");
		if($this->form_validation->run() === FALSE){
			$this->session->set_flashdata("errors", validation_errors());
			return FALSE;
		} else {
		$query = "INSERT into comments(comment_data, post_id, user_id, created_at, updated_at) values (?, ?, ?, NOW(), NOW())";
		$values = array($post['comment_data'], $id, $this->session->userdata('id'));
		$this->db->query($query, $values);

		$query2 ="UPDATE posts set c_ccount = c_ccount +1 where posts.id =?";
		$values = array($id);
		$this->db->query($query2, $values);
		return TRUE;
		}
	}
	public function show_comms($id)
	{
		$query = "SELECT "
	}
	public function like($id){
		$query = "INSERT into likes (post_id, user_id, like_, created_at, updated_at) values (?, ?, 1, NOW(), NOW())";
		$values = array($id, $this->session->userdata('id'));
		$this->db->query($query, $values);

		$query2 = "UPDATE posts set posts.likes_ = posts.likes_ +1 where posts.id = ?";
		$values = array($id);
		$this->db->query($query2, $values);
		return TRUE;
	}
	public function get_user_likes()
	{
		$query = "SELECT post_id from likes where likes.user_id = ?";
		$values = array($this->session->userdata('id'));
		return $this->db->query($query, $values)->result_array();
	} 
}
?>
