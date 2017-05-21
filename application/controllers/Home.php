<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Public_Controller {
	public function __construct() {
	 parent::__construct();
	 // Models
	 $this->load->model('Post_model');
	 //
	 $this->load->library('pagination');
	 $this->data['title'] = "Cellofan' - Accueil";


}

public function index()	{
	// $this->output->enable_profiler(TRUE);
	$config['base_url'] = base_url('home/index/');
	$config['total_rows'] = $this->Post_model->get_public_count();
	$config['per_page'] = 5;
	$config['uri_segment'] = 3;
	$this->pagination->initialize($config);

	$query = $this->Post_model->get_public_posts($config['per_page'], $this->uri->segment(3));
	$this->data['posts'] = $query->result();
	//  var_dump($this->data['posts']);
	$this->template = array(
	 'posts' => $this->data['posts'],
	);
	$this->data['body'] = $this->parser->parse('public/home', $this->template, TRUE);
	$this->load->view('template', $this->data);
}


}
