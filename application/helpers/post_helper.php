<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function description($description = NULL, $content = NULL) {
  if(!is_null($description))
  {
    return htmlspecialchars($description);
  }
  else
  {
    if(!is_null($content)) {
       $xpath = new DOMXPath(@DOMDocument::loadHTML($content));
       return substr(strip_tags($xpath->evaluate("string(//p)")), 0, 150);
    }
    else {
      return "Illud tamen te esse admonitum volo, primum ut qualis es talem te esse omnes existiment ut, quantum a rerum turpitudine abes, tantum te a verborum libe";
    }
  }
}

function thumbnail($post = NULL, $slug = NULL) {
  if(!is_null($post)){
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
       return $thumbnail;
     }
     else
     {
       return FALSE;   
     }
}
