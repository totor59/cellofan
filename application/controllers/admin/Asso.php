<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asso extends MY_Admin_Controller {
	private $table = 'cello_asso';

	public function __construct() {
	 parent::__construct();
	 // Models
	 $this->load->model('Page_model');
	 $this->data['title'] = "Cellofan' - Admin";
	 $this->data['header'] = $this->load->view('admin/templates/header', $this->data, TRUE);
}

public function index()	{
	// $this->output->enable_profiler(TRUE);
	$query = $this->Page_model->get_posts($this->table);
	$this->data['posts'] = $query->result();
	foreach($this->data['posts'] as $post):
		if($post->is_active == 0):
			$post->status = 'red';
			$post->button = 'fa-toggle-on green';
		else:
			$post->status = 'green';
			$post->button = 'fa-toggle-off red';
		endif;
		$post->open = null;
		$post->publish = base_url('admin/asso/publish/'.$post->id);
	endforeach;
	$this->data['posts'][0]->open = "in";
	$this->template = array(
	 'posts' => $this->data['posts'],
	);
	// var_dump($this->data['posts']);
	$this->data['body'] = $this->parser->parse('admin/asso', $this->template, TRUE);
   $this->load->view('template', $this->data);
}

public function create(){
	//  $this->output->enable_profiler(TRUE);
	if ($this->form_validation->run('page') == FALSE):
		$this->data['body'] = $this->load->view('admin/asso', $this->data, TRUE);
		$this->load->view('template', $this->data);
	else:
	 $this->Page_model->create($this->input->post(), $this->table);
	 redirect('admin/asso', 'refresh');
 endif;
 }

    public function edit($post_id){
      $this->output->enable_profiler(TRUE);
           if ($this->form_validation->run('page') == FALSE):
      $this->data['post'] = $this->Page_model->get_post('id', $post_id, $this->table);
      $this->template = array(
        'post' => $this->data['post'],
       );
        // var_dump($this->data['post']);
        // var_dump($this->template);
      $this->data['body'] = $this->parser->parse('admin/edit_page', $this->template, TRUE);
      $this->load->view('template', $this->data);
      else:
       $this->Page_model->edit($post_id, $this->input->post(), $this->table);
       redirect('admin/asso', 'refresh');
     endif;
     }

    public function delete($post_id) {
      if($post_id):
      $this->Page_model->delete($post_id, $this->table);
      redirect('admin/asso');
    endif;
    }

    public function publish($id) {
      if($id):
      $this->Page_model->publish($id, $this->table);
      redirect('admin/Asso');
    endif;
    }

}
