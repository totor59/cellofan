<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

  public function __construct() {
  parent::__construct();
  $this->data['title'] = "Cellofan' - Dashboard";
  $this->data['header'] = $this->load->view('admin/templates/dashboard-header', $this->data, TRUE);
  $this->data['sidebar'] = $this->load->view('admin/templates/sidebar', '', TRUE);
  $this->data['footer'] = $this->load->view('admin/templates/footer', '', TRUE);
}

  public function index() {
    // $this->output->enable_profiler(TRUE);
    $this->data['body'] = $this->load->view('admin/register', '', TRUE);
    $this->load->view('template', $this->data);
  }

  public function add_user() {
    $this->load->model('Login_model');
    if(($this->input->post('password')) == ($this->input->post('password2'))):
    $password = sha1($this->input->post('password'));
    $username = $this->input->post('username');
    $email = $this->input->post('email');
    $this->Login_model->create_login($password, $username, $email);
    redirect('admin/dashboard');
    endif;
  }

}
