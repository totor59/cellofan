<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  Post_model
 */
class Post_model extends CI_Model {

  private $table = 'cello_post';

  public function get_count() {
    return $this->db->count_all($this->table);
  }

  public function get_public_count() {
  return $this->db
              ->select('*')
              ->from($this->table)
              ->where('is_active', 1)
              ->get()
              ->num_rows();
  }

  public function get_posts($limit, $offset) {
  return $this->db
              ->select('*')
              ->from($this->table)
              ->limit($limit, $offset)
              ->order_by('date', 'DESC')
              ->get();
  }

  public function get_public_posts($limit, $offset) {
  return $this->db
              ->select('*')
              ->from($this->table)
              ->where('is_active', 1)
              ->limit($limit, $offset)
              ->order_by('date', 'DESC')
              ->get();
  }

  public function get_post($key, $value) {
    return $this->db
                ->select('*')
                ->from($this->table)
                ->order_by('date', 'DESC')
                ->where($key, $value)
                ->get()
                ->result();
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

  public function edit($post_id, $post)  {
    $data = array(
      'title' => $post->title,
      'slug' => $post->slug,
      'description' => $post->description,
      'content' => $post->content,
      'thumbnail' => $post->thumbnail,
      'is_active' => 0
    );
      $this->db
      ->where('id', $post_id)
      ->update($this->table, $data);
  }

  public function delete($post_id)  {
  $this->db->where('id',$post_id)
           ->delete($this->table);
}

  public function publish($id)  {
    if($this->db->select('is_active')->from($this->table)->where('id', $id)->get()->row()->is_active == 0):
      $i = (1 ?: 0);
    endif;
    $this->db
         ->set('is_active', $i)
         ->where('id', $id)
         ->update($this->table);
  }

}
