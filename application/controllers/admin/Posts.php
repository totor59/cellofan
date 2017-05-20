<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends MY_Admin_Controller {

  public function __construct() {
	 parent::__construct();
   $this->load->model('Post_model');
   $this->load->library('pagination');
	 $this->header[0]['title'] = "Cellofan' - Admin";
   $this->header[0]['posts'] = "active";
   $header = array(
    'header' => $this->header,
   );
   $this->data['header'] = $this->parser->parse('admin/templates/header', $header, TRUE);
   $this->data['sidebar'] = NULL;
   $this->data['footer'] = $this->load->view('admin/templates/footer', '', TRUE);
}

	public function index()	{
    // $this->output->enable_profiler(TRUE);
		$config['base_url'] = base_url('admin/posts/index/');
		$config['total_rows'] = $this->Post_model->get_count();
		$config['per_page'] = 5;
		$config['uri_segment'] = 4;
		$this->pagination->initialize($config);

		$query = $this->Post_model->get_posts($config['per_page'], $this->uri->segment(4));
		$this->data['posts'] = $query->result();


  		foreach($this->data['posts'] as $post):
  			if($post->is_active == 0):
  				$post->button = 'fa-toggle-on green';
  			else:
  				$post->button = 'fa-toggle-on fa-rotate-180 red';
  			endif;
  			$post->publish = base_url('admin/posts/publish/'.$post->id);
  			$post->view = base_url('admin/view/post/'.$post->slug);
  		endforeach;
  		$this->template = array(
  		 'posts' => $this->data['posts'],
  		);

  		$this->data['body'] = $this->parser->parse('admin/dashboard/posts', $this->template, TRUE);

  		$this->load->view('template', $this->data);
}

public function view($slug) {
    // $this->output->enable_profiler(true);
    $this->data['post'] = $this->Post_model->get_post('slug', $slug);
    if ((!$this->data['post'])) {
        show_404();
    }
    $this->template = array(
      'post' => $this->data['post'],
     );
    $this->data['body'] = $this->parser->parse('admin/post', $this->template, TRUE);
    // var_dump($this->data['post']);
    $this->load->view('template', $this->data);
}

  public function create(){
    //  $this->output->enable_profiler(TRUE);
    if ($this->form_validation->run('post') == FALSE):
      $this->data['body'] = $this->load->view('admin/dashboard/create', $this->data, TRUE);
      $this->load->view('template', $this->data);
    else:
     $this->load->library('Post');
     $this->data['post'] = $this->post->prepare($this->input->post());
     $this->Post_model->create($this->data['post']);
     redirect('admin/posts', 'refresh');
   endif;
   }

   public function edit($post_id){
     //$this->output->enable_profiler(TRUE);
          if ($this->form_validation->run('post') == FALSE):
     $this->data['post'] = $this->Post_model->get_post('id', $post_id);
     $this->template = array(
       'post' => $this->data['post'],
      );
      //  var_dump($this->data['post']);
      //  var_dump($this->template);
     $this->data['body'] = $this->parser->parse('admin/dashboard/edit', $this->template, TRUE);
     $this->load->view('template', $this->data);
     else:
      $this->load->library('Post');
      $this->data['post'] = $this->post->prepare($this->input->post());
      $this->Post_model->edit($post_id, $this->data['post']);
      redirect('admin/posts', 'refresh');
    endif;
    }

   public function delete($post_id) {
     if($post_id):
     $this->Post_model->delete($post_id);
     redirect('admin/posts');
   endif;
   }

   public function publish($id) {
     if($id):
     $this->Post_model->publish($id);
     redirect('admin/posts');
   endif;
   }

   public function create_event() {
    $post = $_POST;
    $post['timestamp'] = strtotime($post['date']);
    $post['sql'] = date($post['date']);
    setlocale(LC_TIME, "fr", "fr_FR");
    $post['date'] = strtoupper(strftime("%a %e %B %Y", date($post['timestamp'])));
    // $this->load->library('Event');
    // $event = new Event($post);
    var_dump($post);
   }





}
