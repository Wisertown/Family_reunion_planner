<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// sends email with gmail
class Emails extends CI_Controller {

	public function send()
	{
		
		
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('comment', 'comment', 'trim|required');

		if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
		}else{
			
			$to_email = $this->input->post('to_email');
			$subject = $this->input->post('subject');
			$comm = $this->input->post('comm');

		$config = array(
    		'protocol' => 'smtp',
    		'smtp_host' => 'smtp.gmail.com',
    		'smtp_port' => 465,
    		'smtp_user' => 'smithfam489@gmail.com',
    		'smtp_pass' => 'ghouzcqpfphomngp',
    		'smtp_timeout' => '4',
    		'mailtype'  => 'text', 
    		'charset'   => 'iso-8859-1',
    		'wordwrap' => TRUE
			);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->from('smithfam489@gmail.com', 'Uncle Bob');
		$this->email->to($to_email);
		$this->email->subject($subject);
		$this->email->message($comm);

		if($this->email->send())
		{
			return redirect('index');
			alert("Your email was sent! And Uncle Bob will email you back shortly.");
		}
		else 
		{
			show_error($this->email->print_debugger());
		}
		}
	}
}