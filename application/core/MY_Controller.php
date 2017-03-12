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
}

}

class MY_Admin_Controller extends MY_Controller {


  public function __construct(){
    parent::__construct();
    $this->load->library('Authentification');
    $this->load->library('form_validation');
    $this->authentification->check();

    $this->data['sidebar'] = $this->load->view('admin/templates/sidebar', '', TRUE);
 	 $this->data['footer'] = $this->load->view('admin/templates/footer', '', TRUE);
}

}
