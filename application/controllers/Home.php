<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	 public function __construct() {
	 parent::__construct();

}

	public function index()	{
		// $this->output->enable_profiler(TRUE);
		var_dump($this->session->email);
		$data['title'] = "Cellofan' - Accueil";
		$data['body'] = $this->load->view('public/home', '', TRUE);
		$this->load->view('public/template.php', $data);
	}
}
