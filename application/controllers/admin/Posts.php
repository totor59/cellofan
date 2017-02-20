<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posts extends MY_Controller {

  public function __construct() {
	 parent::__construct();
	 $this->data['title'] = "Cellofan' - Admin";
	 $this->data['header'] = $this->load->view('admin/templates/header', $this->data, TRUE);
	 $this->data['sidebar'] = $this->load->view('admin/templates/sidebar', '', TRUE);
	 $this->data['footer'] = $this->load->view('admin/templates/footer', '', TRUE);
}

	public function index()	{
		// $this->output->enable_profiler(TRUE);
    $this->data['title'] = $this->input->post('title');
		$this->data['body'] = $this->load->view('admin/create', $this->data, TRUE);
		$this->load->view('template', $this->data);
	}
  public function create_post(){
     // $this->output->enable_profiler(TRUE);
      // $this->data['title'] = $this->input->post('title');
      // $this->data['description'] = $this->input->post('description');
      // $this->data['content'] = $this->input->post('content');
      // $this->data['iframe'] = $this->input->post('iframe');
      // $xpath = new DOMXPath(@DOMDocument::loadHTML($this->input->post('content')));
      // $this->data['thumbnail'] = $xpath->evaluate("string(//img/@src)");
     $this->data['body'] = $this->load->view('admin/post', $this->data, TRUE);
     $this->load->view('template', $this->data);
   }

public function test() {
  $this->data['body'] = $this->load->view('admin/test', $this->data, TRUE);
  $this->load->view('template', $this->data);
}

   public function youtube_id_from_url() {
     $url=$this->input->post('url');
    if (preg_match('/youtube\.com\/watch\?v=([^\&\?\/]+)/', $url, $id)) {
      $value = $id[1];
    } else if (preg_match('/youtube\.com\/embed\/([^\&\?\/]+)/', $url, $id)) {
      $value = $id[1];
    } else if (preg_match('/youtube\.com\/v\/([^\&\?\/]+)/', $url, $id)) {
      $value = $id[1];
    } else if (preg_match('/youtu\.be\/([^\&\?\/]+)/', $url, $id)) {
      $value = $id[1];
    }
    else if (preg_match('/youtube\.com\/verify_age\?next_url=\/watch%3Fv%3D([^\&\?\/]+)/', $url, $id)) {
        $value = $id[1];
    } else {
    echo "not an youtube video";
    }
    $length = strlen($value);
    if($length>11):
    $rest = $length - 11;
    $start = -1 * abs($rest);
    $youtube_id = substr($value, 0, 11);
    else:
    $youtube_id = $value;
  endif;
  echo $youtube_id;
  echo "<img src='https://img.youtube.com/vi/".$youtube_id."/hqdefault.jpg'>";
 }


}
