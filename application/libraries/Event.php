<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event {

  public $id = NULL;
  public $timestamp = NULL;
  public $date = NULL;
  public $description = NULL;
  public $link = NULL;

  public function __construct($data) {
    $this->CI =& get_instance();
    // $this->CI->load->model('EventModel', 'Model');
    setlocale(LC_TIME, "fr", "fr_FR");
    $this->date = strtoupper(strftime("%a %e %B %Y", strtotime($this->timestamp)));
  }



}
