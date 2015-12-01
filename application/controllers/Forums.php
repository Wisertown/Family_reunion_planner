<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forums extends CI_Controller {

	public function show()
	{
		$this->load->view('/discuss');
	}

}
?>