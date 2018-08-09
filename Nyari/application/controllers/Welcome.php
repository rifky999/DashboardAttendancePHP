<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->model('berita');
		$this->load->model('user');
	}

	public function index()
	{
		$cek = $this->session->userdata('logged_kota');
		if($cek){
		$kota = $cek;
		$data['beritaku'] = $this->berita->getBerita('berita',$kota);
		$data['berita1'] = 	$this->berita->Berita1('berita');
		$data['kota2'] = $kota;
		$this->load->view('tampilan/index',$data);
	}else {
		$this->load->view('LOGIN/index');

	}

	}

	public function about()
	{
		$cek = $this->session->userdata('logged_kota');
		if($cek){
		$this->load->view('tampilan/about');
	}else {
		$this->load->view('LOGIN/index');

	}

	}

	public function buat()
	{
		$cek = $this->session->userdata('logged_kota');
		$Nouser = $this->session->userdata('logged_usr');
		if($cek){
			$data['sukses'] = ' ';
			$data['nouser'] = $Nouser;
			$this->load->view('tampilan/buatberita',$data);
		}else {
			$this->load->view('LOGIN/index');

		}

	}

	public function daftar(){

		$data['sukses'] = ' ';
			$this->load->view('LOGIN/daftar',$data);

	}

	public function profil(){

		$Nouser = $this->session->userdata('logged_usr');
		if($Nouser){
			$data['no'] = $Nouser;
			$data['user'] = $this->user->getProfil($Nouser);
			$data['berita'] = $this->berita->BeritaUser($Nouser);
			$this->load->view('tampilan/profil',$data);
		}else {
			$this->load->view('LOGIN/index');

		}

	}

	public function detailprofil()
	{
		$detail =  $this->input->get('no_berita');
		$Nouser = $this->session->userdata('logged_usr');
		if($Nouser){

			$data['berita'] = $this->berita->ProfilBerita($detail);
			$this->load->view('tampilan/detailberita',$data);
		}else {
			$this->load->view('LOGIN/index');

		}
	}

	public function delete(){

		$No_berita = $this->input->post('no_berita');
		$linkfoto = $this->input->post('link_foto');
		$pathlink = "C:/xampp/htdocs/Nyari/assets/img/";
		unlink($pathlink.$linkfoto);
		$this->berita->deleteBerita($No_berita);


	}

	public function edit(){
		$No_berita =  $this->input->post('no_berita');
		$Nouser = $this->session->userdata('logged_usr');

		if($Nouser){
			$data['berita'] = $this->berita->ProfilBerita($No_berita);
			$data['noberita'] = $No_berita;
			$this->load->view('tampilan/edit',$data);
		}else {
			$this->load->view('LOGIN/index');

		}



	}


}
