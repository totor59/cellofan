<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  Page_model
 */
class Page_model extends CI_Model {

  public function get_count($table) {
    return $this->db->count_all($table);
  }

  public function get_public_count($table) {
  return $this->db
              ->select('*')
              ->from($table)
              ->where('is_active', 1)
              ->get()
              ->num_rows();
  }

  public function get_posts($table) {
  return $this->db
              ->select('*')
              ->from($table)
              ->order_by('date', 'DESC')
              ->get();
  }

  public function get_public_posts($table) {
  return $this->db
              ->select('*')
              ->from($table)
              ->where('is_active', 1)
              ->order_by('date', 'DESC')
              ->get();
  }

  public function get_post($key, $value, $table) {
    return $this->db
                ->select('*')
                ->from($table)
                ->order_by('date', 'DESC')
                ->where($key, $value)
                ->get()
                ->result();
  }

  public function create($post, $table)  {
    $data = array(
      'title' => $post['title'],
      'content' => $post['content'],
    );
      $this->db->insert($table, $data);
  }

  public function edit($post_id, $post, $table)  {
    $data = array(
      'title' => $post['title'],
      'content' => $post['content'],
      'is_active' => 0
    );
      $this->db
      ->where('id', $post_id)
      ->update($table, $data);
  }

  public function delete($post_id, $table)  {
  $this->db->where('id',$post_id)
           ->delete($table);
}

  public function publish($id, $table)  {
    if($this->db->select('is_active')->from($table)->where('id', $id)->get()->row()->is_active == 0):
      $i = (1 ?: 0);
    endif;
    $this->db
         ->set('is_active', $i)
         ->where('id', $id)
         ->update($table);
  }

}
