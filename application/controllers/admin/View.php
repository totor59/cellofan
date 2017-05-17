<?php
defined('BASEPATH') or exit('No direct script access allowed');

class View extends MY_Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model');
        $this->data['title'] = "Cellofan' - Admin";
        $this->data['header'] = $this->load->view('admin/templates/header', $this->data, true);
        $this->data['sidebar'] = $this->load->view('admin/templates/sidebar', '', true);
        $this->data['footer'] = $this->load->view('admin/templates/footer', '', true);
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
        $this->data['body'] = $this->parser->parse('admin/post', $this->template, TRUE);
        var_dump($this->data['post']);
        $this->load->view('template', $this->data);
    }
}
