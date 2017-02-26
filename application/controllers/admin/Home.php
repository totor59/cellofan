<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct() {
	 parent::__construct();
	 // Models
	 $this->load->model('Post_model');
	 //
	 $this->data['title'] = "Cellofan' - Admin";
	 $this->data['header'] = $this->load->view('admin/templates/header', $this->data, TRUE);
	 $this->data['sidebar'] = $this->load->view('admin/templates/sidebar', '', TRUE);
	 $this->data['footer'] = $this->load->view('admin/templates/footer', '', TRUE);
}

	public function index()	{
		// $this->output->enable_profiler(TRUE);
		$this->data['posts'] = $this->Post_model->get_posts();
		var_dump($this->data['posts']);
		$this->template = array(
     'posts' => $this->data['posts'],
    );
		$this->data['body'] = $this->parser->parse('admin/home', $this->template, TRUE);
		// $this->data['body'] = $this->load->view('admin/home', $this->data, TRUE);
		$this->load->view('template', $this->data);
	}
}
