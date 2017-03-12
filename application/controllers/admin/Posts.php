<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends MY_Controller {

  public function __construct() {
	 parent::__construct();
   $this->load->model('Post_model');
	 $this->data['title'] = "Cellofan' - Admin";
	 $this->data['header'] = $this->load->view('admin/templates/header', $this->data, TRUE);
	 $this->data['sidebar'] = $this->load->view('admin/templates/sidebar', '', TRUE);
	 $this->data['footer'] = $this->load->view('admin/templates/footer', '', TRUE);
}

	public function index()	{
		// $this->output->enable_profiler(TRUE);
		$this->data['body'] = $this->load->view('admin/create', $this->data, TRUE);
		$this->load->view('template', $this->data);
	}
  public function create(){
    //  $this->output->enable_profiler(TRUE);
    if ($this->form_validation->run('post') == FALSE):
      $this->data['body'] = $this->load->view('admin/create', $this->data, TRUE);
      $this->load->view('template', $this->data);
    else:
     $this->load->library('Post');
     $this->data['post'] = $this->post->prepare($this->input->post());
     $this->Post_model->create($this->data['post']);
     redirect('admin/home', 'refresh');
   endif;
   }

   public function edit($post_id){
     $this->output->enable_profiler(TRUE);
          if ($this->form_validation->run('post') == FALSE):
     $this->data['post'] = $this->Post_model->get_post('id', $post_id);
     $this->template = array(
       'post' => $this->data['post'],
      );
       var_dump($this->data['post']);
       var_dump($this->template);
     $this->data['body'] = $this->parser->parse('admin/edit', $this->template, TRUE);
     $this->load->view('template', $this->data);
     else:
      $this->load->library('Post');
      $this->data['post'] = $this->post->prepare($this->input->post());
      $this->Post_model->edit($post_id, $this->data['post']);
      redirect('admin/home', 'refresh');
    endif;
    }

   public function delete($post_id) {
     if($post_id):
     $this->Post_model->delete($post_id);
     redirect('admin/home');
   endif;
   }

   public function publish($id) {
     if($id):
     $this->Post_model->publish($id);
     redirect('admin/home');
   endif;
   }





}
