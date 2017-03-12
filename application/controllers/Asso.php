<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asso extends MY_Public_Controller {
	public function __construct() {
	 parent::__construct();
	 // Models
	 $this->load->model('Post_model');
	 //
	 $this->load->library('pagination');
	 $this->data['title'] = "Cellofan' - L'Asso";
	 $this->data['header'] = $this->load->view('public/templates/header', $this->data, TRUE);
}

public function index()	{
	// $this->output->enable_profiler(TRUE);
   $this->data['body'] = $this->load->view('public/asso', $this->data, TRUE);
   $this->load->view('template', $this->data);
}
}
