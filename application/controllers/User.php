<?php 
 
class User extends CI_Controller{
 
	function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('user_model');
	}
 
	function index(){					//form login
		$cari = $this->user_model->ambil_artikel();
		if ($cari)
		{
		    $data['hasil_artikel'] = $cari;
		}
		 
		$dpthasil = $this->user_model->ambil_galeri();
		if ($dpthasil)
		{
		    $data['hasil_galeri'] = $dpthasil;
		}

		$data['barang'] = $this->Model_barang->tampil_data()->result();
		// $this->load->view('templates/header');
		// $this->load->view('templates/sidebar');
		$this->load->view('user/index', $data); //halman utama
		$this->load->view('templates/footer');
		 
		
	}

	function kelas_1(){
		$data = array('data_kelas_1' => $this->user_model->ambil_kelas_1()->result_array(),);
		$this->load->view('user/kelas_1', $data);
	}

	function kelas_2(){
		$data = array('data_kelas_2' => $this->user_model->ambil_kelas_2()->result_array(),);
		$this->load->view('user/kelas_2', $data);
	}

	function kelas_3(){
		$data = array('data_kelas_3' => $this->user_model->ambil_kelas_3()->result_array(),);
		$this->load->view('user/kelas_3', $data);
	}

	function guru(){						//button warta jemaat


		$data = array('data_guru' => $this->user_model->ambil_guru()->result_array(),);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('user/guru', $data);
		$this->load->view('templates/footer');
	}

	function jadwal(){					   //button jadwal
		$data = array('data_ekstrakulikuler' => $this->admin_model->ambil_ekstrakulikuler()->result_array(),);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('user/jadwal', $data);
		$this->load->view('templates/footer');
	}

	function mata_pelajaran(){
		$data = array('data_mapel' => $this->admin_model->ambil_mapel()->result_array(),);
		$this->load->view('user/mata_pelajaran', $data);
	}

	function galeri(){                    //button videoo (Galeri)
		$dpthasil = $this->user_model->ambil_galeri();
		if ($dpthasil)
		{
		    $data['hasil_galeri'] = $dpthasil;
		}

		$data['barang'] = $this->Model_barang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('user/galeri', $data);
		$this->load->view('templates/footer');

		
	}

	function kontak(){
		$this->load->view('user/kontak');
	}

	function artikel(){
		$cari = $this->user_model->ambil_artikel();
		if ($cari)
		{
		    $data['hasil_artikel'] = $cari;
		}
		 
		$this->load->view('user/artikel', $data); 
	}

	function detail_artikel($kode = 0){
	    $row = $this->admin_model->edit_artikel("where artikel.`id_artikel`  = '$kode'")->result_array();

	    $data = array(
	      'id_artikel' => $row[0]['id_artikel'],
	      'judul' => $row[0]['judul'],
	      'isi' => $row[0]['isi'],
	      'gambar' => $row[0]['gambar'],
	      'penulis' => $row[0]['penulis'],
	      'tanggal' => $row[0]['tanggal'],
	    );

	    $this->load->view('user/detail_artikel', $data);
  	}

  	function profil(){
		$cari = $this->user_model->ambil_profil();
		if ($cari)
		{
		    $data['hasil_profil'] = $cari;
		}
		 
		$this->load->view('user/profil', $data); 
	}

	function detail_profil($kode = 0){
	    $row = $this->admin_model->edit_profil("where profil.`id_profil`  = '$kode'")->result_array();

	    $data = array(
	      'id_profil' => $row[0]['id_profil'],
	      'nama' => $row[0]['nama'],
	      'isi' => $row[0]['isi'],
	      'gambar' => $row[0]['gambar'],
	    );

	    $this->load->view('user/detail_profil', $data);
  	}

}