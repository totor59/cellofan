<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

  public function __construct() {
  parent::__construct();
  $this->load->helper(array('form', 'url'));
}

  public function index() {
    $this->output->enable_profiler(TRUE);
    $data['title'] = "Cellofan' - Dashboard";
    $data['body'] = $this->load->view('admin/register', '', TRUE);
    $this->load->view('admin/template.php', $data);
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
