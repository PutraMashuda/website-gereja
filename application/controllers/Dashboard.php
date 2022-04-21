<?php

class Dashboard extends CI_Controller{


	// public function __construct(){
	// 	parent::__construct();

	// 	if($this->session->userdata('role_id') != '2'){
	// 		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
	// 				  <strong>Hey!</strong> Anda Belum Login
	// 				  <button type="button" class="close" data dismiss="alert" aria-label="Close">
	// 				  <span aria-hidden="true"&times;</span>
	// 				  </button>
	// 				</div>');
	// 		redirect('auth/login');
	// 	}
	// }


	public function index()
	{
		$data['barang'] = $this->Model_barang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}

	// public function tambah_ke_keranjang($id)
	// {
	// 	$barang = $this->model_barang->find($id);

	// 	$data = array(
	// 	        'id'      => $barang->id_brg,
	// 	        'qty'     => 1,
	// 	        'price'   => $barang->harga,
	// 	        'name'    => $barang->nama_brg,
	// );

	// $this->cart->insert($data);
	// redirect('dashboard');

	// }

	public function detail_keranjang()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('keranjang');
		$this->load->view('templates/footer');
	}

	public function hapus_keranjang()
	{
		$this->cart->destroy();
		redirect('dashboard/index');
	}

	// public function pembayaran()
	// {
	// 	$this->load->view('templates/header');
	// 	$this->load->view('templates/sidebar');
	// 	$this->load->view('pembayaran');
	// 	$this->load->view('templates/footer');
	// }

	// public function proses_pesanan()
	// {
	// 	$is_processed = $this->model_invoice->index();
	// 	if($is_processed){
	// 		$this->cart->destroy();
	// 		$this->load->view('templates/header');
	// 		$this->load->view('templates/sidebar');
	// 		$this->load->view('proses_pesanan');
	// 		$this->load->view('templates/footer');
	// 	} else {
	// 		echo "Waduh.. Gagal diproses nih";
	// 	}

	// }

	public function detail($id_brg)
	{
		$data['barang'] = $this->Model_barang->detail_brg($id_brg);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('detail_barang',$data);
			$this->load->view('templates/footer');
	}
}