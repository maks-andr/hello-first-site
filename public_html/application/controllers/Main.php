<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()

	{
		$this->load->view('page/header');
		// $this->load->view('page/aside');
		$this->load->view('page/article');
		// $this->load->view('page/footer');
	}

	public function login()
	{
		$data['CurrentArticleContent'] = get_register_form();
		$this->load->view('page/article', $data);
	}



}
