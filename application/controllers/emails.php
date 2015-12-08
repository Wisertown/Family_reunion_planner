<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// sends email with gmail
class Emails extends CI_Controller {

	function __construct(){
		parent::Controller();
	}

		$this->load->library('email');

		$this->email->from('aaron.wise253@gmail.com', 'Awise');
		$this->email->to('wiserton27@gmail.com'); 


		$this->email->subject('Email Test');
		$this->email->message('Testing the email class.');	

		$this->email->send();

		echo $this->email->print_debugger();
}
?>