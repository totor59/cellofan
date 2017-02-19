<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
	 parent::__construct();
	 $this->data['title'] = "Cellofan' - Accueil";
	 $this->data['header'] = $this->load->view('public/templates/header', $this->data, TRUE);
	 $this->data['sidebar'] = $this->load->view('public/templates/sidebar', '', TRUE);
	 $this->data['footer'] = $this->load->view('public/templates/footer', '', TRUE);
}

	public function index()	{
		// $this->output->enable_profiler(TRUE);
		$this->data['body'] = $this->load->view('public/home', '', TRUE);
		$this->load->view('template.php', $this->data);
	}
}
