<?php
defined('BASEPATH') or exit('No direct script access allowed');

class View extends MY_Public_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model');

    }

    public function index($slug) {
        // $this->output->enable_profiler(true);
        $this->data['post'] = $this->Post_model->get_post('slug', $slug);
        if ((!$this->data['post'])) {
            show_404();
        }
        $this->template = array(
          'post' => $this->data['post'],
         );
        $this->data['body'] = $this->parser->parse('public/post', $this->template, TRUE);
        // var_dump($this->data['post']);
        $this->load->view('template', $this->data);
    }
}
