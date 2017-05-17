<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Admin_Controller {
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
		$config['base_url'] = base_url('admin/home/index/');
		$config['total_rows'] = $this->Post_model->get_count();
		$config['per_page'] = 5;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);

		$query = $this->Post_model->get_posts($config['per_page'], $this->uri->segment(4));
		$this->data['posts'] = $query->result();


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
		$this->template = array(
		 'posts' => $this->data['posts'],
		);

		// var_dump($this->data['posts']);
		$this->data['body'] = $this->parser->parse('admin/home', $this->template, TRUE);
		$this->load->view('template', $this->data);
	}

	public function test() {
		$query = $this->Post_model->get_posts(NULL, NULL);
		$this->data['posts'] = $query->result();


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
		$this->template = array(
		 'posts' => $this->data['posts'],
		);
		
		$this->data['header'] = $this->load->view('admin2/templates/header', $this->data, TRUE);
		$this->data['sidebar'] = NULL;
		$this->data['footer'] = $this->load->view('admin2/templates/footer', '', TRUE);
		$this->data['body'] = $this->parser->parse('admin2/dashboard/posts', $this->template, TRUE);

		$this->load->view('template', $this->data);
	}

}
