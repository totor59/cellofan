<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {


  public function __construct(){
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library('Authentification');
    $this->authentification->check();
}

}
