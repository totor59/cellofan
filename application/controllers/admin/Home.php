<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	public function __construct() {
	 parent::__construct();
	 // Models
	 $this->load->model('Post_model');
	 //
	 $this->load->library('pagination');
	 //
	 $this->data['title'] = "Cellofan' - Admin";
	 $this->data['header'] = $this->load->view('admin/templates/header', $this->data, TRUE);
	 $this->data['sidebar'] = $this->load->view('admin/templates/sidebar', '', TRUE);
	 $this->data['footer'] = $this->load->view('admin/templates/footer', '', TRUE);
}

	public function index()	{
		// $this->output->enable_profiler(TRUE);
		$query = $this->Post_model->get_posts();
		$this->data['posts'] = $query->result();
		$this->data['count'] = $query->num_rows();
		foreach($this->data['posts'] as $post):
			if($post->is_active == 0):
				$post->status = 'red';
				$post->button = 'fa-toggle-on green';
			else:
				$post->status = 'green';
				$post->button = 'fa-toggle-off red';
			endif;
			$post->publish = base_url('admin/posts/publish/'.$post->id);
			$post->view = base_url('admin/view/post/'.$post->slug);
		endforeach;
		var_dump($this->data['posts']);
		// $config['base_url'] = base_url('admin/home/');
		// $config['total_rows'] = $this->data['count'];
		// $config['per_page'] = 1;
		// $config['uri_segment'] = 3;
		$this->template = array(
     'posts' => $this->data['posts'],
    );
		// $this->pagination->initialize($config);
		$this->data['body'] = $this->parser->parse('admin/home', $this->template, TRUE);
		// $this->data['body'] = $this->load->view('admin/home', $this->data, TRUE);
		$this->load->view('template', $this->data);
	}
}
