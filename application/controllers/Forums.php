<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forums extends CI_Controller {

	public function show()
	{	
		$user_likes = $this->Forum->get_user_likes();
		$comms = $this->Forum->get_total_comms_likes();
		$user = $this->Forum->get_user_info();
		$posts = $this->Forum->get_all_posts();
		$this->load->view('/discuss', array("user"=>$user, "posts"=>$posts, "user_likes"=>$user_likes));
	}
	public function post_create()
	{
		if($this->Forum->create($this->input->post())){
			redirect('/discuss');
		} else {
			redirect('/discuss');
		}
	}
	public function comment_create($id)
	{	
		if($this->Forum->comm_create($this->input->post(), $id)){	
			redirect('/discuss');
		} else {
			redirect('/discuss');
		}
	}
	public function like($id)
	{
		$this->Forum->like($id);
		return redirect('/discuss');
	}
	public function show_comms($id)
	{
		$all_likes = $this->Forum->get_likes($id);
		$comms = $this->Forum->show_comms($id);
		$this->load->view('/comments');
	}

}
?>