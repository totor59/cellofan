<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activites extends MY_Admin_Controller {
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
   $this->data['header'] = $this->parser->parse('admin/templates/header', $header, TRUE);
	 $this->data['sidebar'] = NULL;
	 $this->data['footer'] = $this->load->view('admin/templates/footer', '', TRUE);
 }

public function index()	{
	// $this->output->enable_profiler(TRUE);
	$query = $this->Page_model->get_posts($this->table);
	$this->data['posts'] = $query->result();
	foreach($this->data['posts'] as $post):
		if($post->is_active == 0):
			$post->status = 'red';
			$post->button = 'fa-toggle-on red';
		else:
			$post->status = 'green';
			$post->button = 'fa-toggle-off green';
		endif;
		$post->open = null;
		$post->publish = base_url('admin/asso/publish/'.$post->id);
	endforeach;
	$this->template = array(
	 'posts' => $this->data['posts'],
	);
	//  var_dump($this->data['posts']);
	$this->data['body'] = $this->parser->parse('admin/dashboard/activites', $this->template, TRUE);
   $this->load->view('template', $this->data);
}

public function create(){
	//  $this->output->enable_profiler(TRUE);
	if ($this->form_validation->run('page') == FALSE):
		$this->data['body'] = $this->load->view('admin/dashboard/create_acti', $this->data, TRUE);
		$this->load->view('template', $this->data);
	else:
	 $this->Page_model->create($this->input->post(), $this->table);
	 redirect('admin/activites', 'refresh');
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
      $this->data['body'] = $this->parser->parse('admin/dashboard/edit_acti', $this->template, TRUE);
      $this->load->view('template', $this->data);
      else:
       $this->Page_model->edit($post_id, $this->input->post(), $this->table);
       redirect('admin/activites', 'refresh');
     endif;
     }

    public function delete($post_id) {
      if($post_id):
      $this->Page_model->delete($post_id, $this->table);
      redirect('admin/activites');
    endif;
    }

    public function publish($id) {
      if($id):
      $this->Page_model->publish($id, $this->table);
      redirect('admin/activites');
    endif;
    }

}
