<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct(){
		parent :: __construct();
		$this->load->model('berita');
		$this->load->model('login');
	}
	public function index(){
		$this->load->view('LOGIN/index');
	}

	public function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$status = $this->login->val_login($username,$password);

		if($status){
			foreach ($status as $row) {
				$sess_array = $arrayName = array(
					$usr  =  $row['no_usr'],

					$kota =  $row['kota'],


			 );
				$this->session->set_userdata('logged_usr',$usr);
				$this->session->set_userdata('logged_kota',$kota);
				redirect('/welcome/index','refresh');
			}
		}else {

					redirect('/auth/index','refresh');

	}

}
  public function daftar()
	{
		$last_row=$this->db->select('*')->order_by('no_usr',"desc")->limit(1)->get('user')->row();
			$no_usr =  $last_row->no_usr + 1;
			$User  	=  $this->input->post('username');
			$Pass  	=  $this->input->post('password');
			$Nama  	=  $this->input->post('nama');
			$Email  =  $this->input->post('email');
			$No  		=  $this->input->post('no');
			$Kota   =  $this->input->post('kota');
			$Alamat =  $this->input->post('alamat');


			$datasemua = array(
				'no_usr'  		=> $no_usr,
				'username'		=> $User,
	      'password'    => $Pass,
	      'nama'    		=> $Nama,
	      'email'    		=> $Email,
	      'no_telp'			=> $No,
	      'kota'				=> $Kota,
	      'alamat' 			=> $Alamat
			);

			$res = $this->db->insert('user',$datasemua);

		if ($res>=1) {
			$data['sukses'] = '1';
			$this->load->view('LOGIN/daftar',$data);
		}
		else {
			$data['sukses'] = '2';
			$this->load->view('LOGIN/daftar',$data);
		}

	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->load->view('LOGIN/index');
	}
}
