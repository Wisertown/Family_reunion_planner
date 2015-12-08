<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// sends email with gmail
class Emails extends CI_Controller {

	public function send()
	{
		
		$this->form_validation->set_rules('fr_email', 'Your Email Address', 'trim|required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		$this->form_validation->set_rules('comment', 'comment', 'trim|required');

		if($this->form_validation->run() == FALSE){
			$this->session->set_flashdata('errors', validation_errors());
		}else{
			
			$fr_email = $this->input->post('fr_email')
			$to_email = $this->input->post('to_email');
			$subject = $this->input->post('subject');
			$comm = $this->input->post('comment');

			$this->load->library('email');
			$this->email->set_newline("\r\n");

			$this->email->from($fr_email);
			$this->email->to($to_email);
			$this->email->subject($subject);
			$this->email->message($comm);

			if($this->email->send())
			{
				redirect('/emailsent');
			}
			else 
			{
				show_error($this->email->print_debugger());
			}
		}
	}
}