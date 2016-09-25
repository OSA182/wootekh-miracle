<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	public function index()
	{
        $data['title'] = "Frequently Asked Question";
        $data['content'] = "faq";
		$this->load->view('template', $data);
	}
}
