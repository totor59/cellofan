<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post {

  public $thumbnail;

  public function __construct() {
    $this->CI =& get_instance();
    $this->CI->load->helper('text');
  }

  public function prepare($data) {
      $post = new stdClass();
      $post->title = htmlspecialchars($data['title']);
      $post->slug = url_title(convert_accented_characters($post->title, 'dash', TRUE));
      $post->content = ($data['content'] ?: NULL );
      $post->description = ((htmlspecialchars($data['description'])) ?: $this->excerpt($data['content']) ?: NULL);
      $post->thumbnail = $this->thumbnail($post->content, $post->slug);
      return $post;
  }

  public function excerpt($post) {
    if($post):
    $xpath = new DOMXPath(@DOMDocument::loadHTML($post));
    $excerpt = (substr(strip_tags($xpath->evaluate("string(//p)")), 0, 150) ?: NULL);
      return $excerpt;
    endif;
  }

  public function thumbnail($post, $slug) {
    $thumbnail = base_url('public/assets/img/logo.png');
    if(isset($post)){
      $xpath = new DOMXPath(@DOMDocument::loadHTML($post));
      $img = ($xpath->evaluate("string(//img/@src)") ?: NULL);
      $url = ($xpath->evaluate("string(//iframe/@src)") ?: NULL);
        if($url):
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
         }
         $length = strlen($value);
         if($length>11):
         $id = substr($value, 0, 11);
         else:
         $id = $value;
         endif;
         $youtube_thumbnail = ("https://img.youtube.com/vi/".$id."/hqdefault.jpg" ?: NULL);
       endif;
       if(!is_null($img)):
         $thumbnail = $img;
       endif;
       if(isset($youtube_thumbnail) AND !is_null($youtube_thumbnail)):
         $img = '/var/www/html/cellofan/public/uploads/thumbnails/'.$slug.'.jpg';
         file_put_contents($img, file_get_contents($youtube_thumbnail));
         $thumbnail = base_url('public/uploads/thumbnails/'.$slug.'.jpg');
       endif;
  }
         return $thumbnail;
  }
}
