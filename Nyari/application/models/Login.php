<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model {

	public function val_login($username, $password){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $this->db->limit(1);

    $query = $this->db->get();

    if($query->num_rows()==1){
        return $query->result_array();
    }else {
      return false;
    }

  }


}
