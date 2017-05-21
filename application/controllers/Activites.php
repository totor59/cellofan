<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activites extends MY_Public_Controller {
	private $table = 'cello_activites';

	public function __construct() {
	 parent::__construct();
	 // Models
	 $this->load->model('Page_model');
	 $this->header[0]['title'] = "Cellofan' - Admin";
	 $this->header[0]['pages'] = "active";
   $header = array(
    'header' => $this->header,
   );
  //  $this->data['header'] = $this->parser->parse('admin/templates/header', $header, TRUE);
	//  $this->data['sidebar'] = NULL;
	//  $this->data['footer'] = $this->load->view('admin/templates/footer', '', TRUE);
 }

public function index()	{
	// $this->output->enable_profiler(TRUE);
	$query = $this->Page_model->get_public_posts($this->table);
	$this->data['posts'] = $query->result();
	$this->data['posts'][0]->open = "in";
	$this->template = array(
	 'posts' => $this->data['posts'],
	);
	//  var_dump($this->data['posts']);
	$this->data['body'] = $this->parser->parse('public/activites', $this->template, TRUE);
   $this->load->view('template', $this->data);
}

}
