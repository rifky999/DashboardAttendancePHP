<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function getProfil($usr){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('no_usr',$usr);

    $data = $this->db->get();
    return $data->result_array();
  }


}
