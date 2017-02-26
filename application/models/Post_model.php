<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  Post_model
 */
class Post_model extends CI_Model {

  private $table = 'cello_post';

  public function get_posts() {
    $query = $this->db
                  ->select('*')
                  ->from($this->table)
                  ->order_by('date', 'DESC')
                  ->get();
    return $query->result();
  }

  public function create($post)  {
    $data = array(
      'title' => $post->title,
      'slug' => $post->slug,
      'description' => $post->description,
      'content' => $post->content,
      'thumbnail' => $post->thumbnail,
      'is_active' => 0
    );
      $this->db->insert($this->table, $data);
  }


}
