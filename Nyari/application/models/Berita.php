<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Model {

	public function getBerita($table,$kota){
		$this->db->select('*');
    $this->db->from($table);
    $this->db->where('kota',$kota);

    $data = $this->db->get();
    return $data->result_array();
  }

	public function Berita1($table)
	{
		$this->db->select('*');
		$this->db->from($table);

		$data = $this->db->get();
		return $data->result_array();
	}

	public function ProfilBerita($berita){
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->where('no_berita',$berita);

		$data = $this->db->get();
		return $data->result_array();
	}

	public function BeritaUser($profil)
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->where('no_usr',$profil);

		$data = $this->db->get();
		return $data->result_array();
	}

	public function deleteBerita($no_berita){
		$this->db->where('no_berita',$no_berita);
		$this->db->delete('berita');
	}

	public function editdata1($dataALL,$nober){
		$this->db->where('no_berita',$nober);
		return $this->db->update('berita',$dataALL);

	}

	public function searchdb($search)
	{
		$this->db->select('*');
		$this->db->from('berita');
		$this->db->like('nama',$search);

		$data = $this->db->get();
		return $data->result_array();
	}


}
