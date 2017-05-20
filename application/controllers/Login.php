<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct() {
  parent::__construct();
  $this->load->helper(array('form', 'url'));
  $this->load->library('Authentification');
}

  public function index() {
    // $this->output->enable_profiler(TRUE);
    $data['title'] = "Cellofan' - Login";
    $data['body'] = $this->load->view('login/login', '', TRUE);
    $this->load->view('login/template.php', $data);
  }

  public function login() {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    if($this->authentification->login($username, $password) == FALSE):
      redirect('login', 'refresh');
    else:
      redirect('admin/posts', 'refresh');
    endif;
  }

  public function logout() {
    $this->session->sess_destroy();
    redirect('home');
    }

}
