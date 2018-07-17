<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_videocall extends CI_Controller {
	public function index()
	{
		if ($this->session->id == '') {
        	redirect(base_url());
        }
		$this->load->view('templ/header');
		$this->load->view('video_call');
		$this->load->view('templ/footer');		
	}
}
