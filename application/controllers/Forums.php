<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forums extends CI_Controller {

	public function show()
	{
		$user = $this->Forum->get_user_info();
		$posts = $this->Forum->get_all_posts();
		$this->load->view('/discuss');
	}
	public function post_create()
	if($this->Forum->create($this->input->post())){
			redirect('/discuss');
		} else {
			redirect('/discuss');
		}
	}


}
?>