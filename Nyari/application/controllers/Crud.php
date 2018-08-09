<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('berita');
	}


	public function index()
	{

		$this->load->view('tampilan/buatberita');
	}

  public function input()
  {
//CEk session
		$data = NULL;
		$cek = $this->session->userdata('logged_kota');
		if($cek){
			$cek = 1;
		}else {
			$this->load->view('LOGIN/index');
		}
//define var gambar file name
		$gambar['file_name'] = NULL;
		//Config Upload Image
		$config = array(
				'upload_path' => 'assets/img/',
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "10048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
				'max_height' => "768",
				'max_width' => "1024");

				//Set Config
				$this->load->library('upload', $config);
				//Define No_user
				$No_user = $this->input->post('no_user');

				//If Image Fail to upload
				if ( ! $this->upload->do_upload('FotoBerita')){
					if ($cek) {
						$data['sukses'] = '2';
						$data['nouser'] = $No_user;
			      $this->load->view('tampilan/buatberita',$data);
					}
				}else{
					$gambar = $this->upload->data();
				}


		//INSER BERITA"
		/* For getting lastRow ID
		$last_row=0;
    $last_row=$this->db->select('*')->order_by('no_usr',"desc")->limit(1)->get('berita')->row();
		*/

		//Define Data Berita
    $Judul  =  $this->input->post('judul');
		$Foto		=  $gambar['file_name'];
		$Nama   =  $this->input->post('nama');
    $Jkel   =  $this->input->post('jkel');
    $Umur  			=  $this->input->post('umur');
    $Ciri2      =  $this->input->post('ciri2');
    $Deskripsi  =  $this->input->post('deskripsi');
		$Kota  =  $this->input->post('kota');
    $No     =  $this->input->post('no');

  //  $last_row = $last_row->no_usr + 1;

	//define Data Berita Into Array
    $dataAll = array(
      'no_usr'  => $No_user,
			'foto'  	=> $Foto,
			'nama'		=> $Nama,
      'judul'   => $Judul,
      'jkel'    => $Jkel,
      'umur'    => $Umur,
      'ciri-ciri'	=> $Ciri2,
      'deskripsi'	=> $Deskripsi,
      'kota'	=> $Kota,
			'hubungi' 	=> $No
    );
    if(empty($Foto) OR empty($Kota) OR empty($Nama) OR empty($Judul) OR empty($Jkel) OR empty($Umur) OR empty($Ciri2) OR empty($Deskripsi) OR empty($No))
    {
      $res = 0;
    }
    else {

      $res = $this->db->insert('berita',$dataAll);
    }
    if ($res>=1) {
			if ($cek) {
				$data['sukses'] = '1';
				$data['nouser'] = $No_user;
				$this->load->view('tampilan/buatberita',$data);
			}
    }

    else {
			if ($data['sukses'] == 2) {
				$data['sukses'] = 2;
			}
			else {
				if ($cek) {
					$data['sukses'] = '0';
					$data['nouser'] = $No_user;
					$this->load->view('tampilan/buatberita',$data);
				}
			}
    }
  }

	public function edit(){

		$cek = $this->session->userdata('logged_kota');
		$gambar['file_name'] = NULL;
		//UPLOAD FOTO
		$config = array(
				'upload_path' => 'assets/img/',
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
				'max_height' => "768",
				'max_width' => "1024");

				$this->load->library('upload', $config);

				if ( ! $this->upload->do_upload('FotoBerita')){
					$data['sukses'] = 'databesar';

				}else{
					$gambar = $this->upload->data();
				}

			$Foto	=  $gambar['file_name'];

			$No_berita		= $this->input->post('no_berita');
			$Judul  		=  $this->input->post('judul');
			$Nama   		=  $this->input->post('nama');
			$Jkel   		=  $this->input->post('jkel');
			$Umur  			=  $this->input->post('umur');
			$Ciri2      =  $this->input->post('ciri2');
			$Deskripsi  =  $this->input->post('deskripsi');
			$Kota  			=  $this->input->post('kota');
			$No     		=  $this->input->post('no');

		if ($Foto == NULL) {
			$dataAll = array(
				'nama'		=> $Nama,
				'judul'   => $Judul,
				'jkel'    => $Jkel,
				'umur'    => $Umur,
				'ciri-ciri'	=> $Ciri2,
				'deskripsi'	=> $Deskripsi,
				'kota'	=> $Kota,
				'hubungi' 	=> $No
			);
			$this->berita->editdata1($dataAll,$No_berita);
			echo "<script type='text/javascript'>alert('Edit Berhasil');</script>";
				redirect('/welcome/profil','refresh');
		}
		else {

			$dataAll = array(
				'foto'  	=> $Foto,
				'nama'		=> $Nama,
	      'judul'   => $Judul,
	      'jkel'    => $Jkel,
	      'umur'    => $Umur,
	      'ciri-ciri'	=> $Ciri2,
	      'deskripsi'	=> $Deskripsi,
	      'kota'	=> $Kota,
				'hubungi' 	=> $No
	    );

			$fotber = $this->berita->ProfilBerita($No_berita);
			echo "<script type='text/javascript'>alert('Edit Berhasil');</script>";
			$this->berita->editdata1($dataAll,$No_berita);
			redirect('/welcome/profil','refresh');
		}
	}


		public function search()
		{
			$cek = $this->session->userdata('logged_kota');
			if($cek){
			$search		= $this->input->post('search');
			$kota = 0;
			$data['beritaku'] = $this->berita->searchdb($search);
			$data['kota2'] = $kota;
			$data['berita1']=1;
			$this->load->view('tampilan/index',$data);
			}else {
			$this->load->view('LOGIN/index');

			}

		}



}
