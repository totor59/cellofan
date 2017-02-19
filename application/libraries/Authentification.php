<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentification {

  public function __construct() {

    $this->CI =& get_instance();
    $this->CI->load->model('Login_model');
  }

  public function login($username, $password) {
  $query = $this->CI->Login_model->login($username, sha1($password));
  $row = $query->row();
    if(is_null($row)):
      return FALSE;
    else:
      $data = array(
          'username' => $row->name,
          'password' => $row->password,
          'email' => $row->email,
          'id' => $row->id
        );
        $this->CI->session->set_userdata($data);
        return TRUE;
    endif;
  }

  public function check() {
    $query = $this->CI->Login_model->login($_SESSION['username'], $_SESSION['password']);
    $nb = $query->num_rows();
    if($nb != 1):
      redirect('home');
    endif;
  }
}
