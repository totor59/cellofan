<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {


  public function __construct(){
    parent::__construct();
    $this->load->helper(array('form', 'url'));

}

}


class MY_Public_Controller extends MY_Controller {


  public function __construct(){
    parent::__construct();
    $this->data['sidebar'] = $this->load->view('public/templates/sidebar', '', TRUE);
    $this->data['footer'] = $this->load->view('public/templates/footer', '', TRUE);
    $this->header[0]['posts'] = NULL;
    $this->header[0]['pages'] = NULL;
    $this->header[0]['events'] = NULL;
    $this->header[0]['general'] = NULL;
    $this->header[0]['admin'] = NULL;
    $this->header[0]['preview'] = "active";
    $this->header[0]['title'] = "Cellofan' - Admin";
    $header = array(
     'header' => $this->header,
     );
    if(isset($_SESSION['password']))
    {
     $this->data['header'] = $this->parser->parse('admin/templates/header', $header, TRUE);
    } else {
    $this->data['header'] = $this->load->view('public/templates/header', $this->data, TRUE);
  }
}

}

class MY_Admin_Controller extends MY_Controller {


  public function __construct(){
    parent::__construct();
    $this->load->library('Authentification');
    $this->load->library('form_validation');
    $this->authentification->check();
    $this->header[0]['posts'] = NULL;
    $this->header[0]['pages'] = NULL;
    $this->header[0]['events'] = NULL;
    $this->header[0]['general'] = NULL;
    $this->header[0]['admin'] = NULL;
    $this->header[0]['preview'] = NULL;
    //$this->data['sidebar'] = $this->load->view('admin/templates/sidebar', '', TRUE);
 	 $this->data['footer'] = $this->load->view('admin/templates/footer', '', TRUE);
}

}
