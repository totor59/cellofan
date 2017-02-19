<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *  Login_model
 */
class Login_model extends CI_Model {

  private $table = 'cello_admin';

  public function login($username, $password) {
  $query = $this->db
                ->select('*')
                ->from($this->table)
                ->where('name', $username)
                ->where('password', $password)
                ->get();
  return $query;
              }


  public function create_login($password, $username, $email) {
    $data = array(
        'password' => $password,
        'name' => $username,
        'email' => $email
      );
    $this->db
         ->insert($this->table, $data);
  }


}
