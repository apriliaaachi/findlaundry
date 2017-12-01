<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CGabung extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_main');
		$this->load->helper('url');
 
	}

	function index(){

		$this->template->load('viewStatic', 'viewInfoDiri');
	}

	function infoLaundry(){
		// $provinsi['wilayahprovinsi'] = $this->m_main->getWilayah();
		$this->template->load('viewStatic', 'viewInfoLaundry');
	}

	function infoLayanan(){
		$this->template->load('viewStatic', 'viewInfoLayanan');
	}

	function aksi_input1(){

		$namaLengkap = $this->input->post('namaLengkap');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$noHp = $this->input->post('noHp');
		// $level = $this->input->post('$level');

		$data = array(
		'namaLengkap' => $namaLengkap,
		'email' => $email,
		'username' => $username,
		'password' => md5($password),
		'noHp' => $noHp,
		'gambar' => 'user.png',
		'level' => 'owner'
		);

		$this->m_main->input_owner($data,'user');
		redirect('CGabung/infoLaundry');

	}

	function aksi_input2(){

		$namaLaundry = $this->input->post('namaLaundry');
		$surat = $this->input->post('surat');
		$email = $this->input->post('email');
		$noTelpon = $this->input->post('noTelpon');
		$kodePos = $this->input->post('kodePos');
		$alamat = $this->input->post('alamat');
		$deskripsi = $this->input->post('deskripsi');
		// $level = $this->input->post('$level');

		$data = array(
		'namaLaundry' => $namaLaundry,
		'surat' => $surat,
		'email' => $email,
		'noTelpon' => $noTelpon,
		'kodePos' => $kodePos,
		'alamat' => $alamat,
		'deskripsi' => $deskripsi,
		'gambar' => 'laundry4.jpg'
		// 'level' => $level
		);

		$this->m_main->input_laundry($data,'laundry');
		redirect('CGabung/infoLayanan');

	}

	function aksi_input3a(){

		$namaLayanan = $this->input->post('namaLayanan');
		$harga = $this->input->post('harga');
		$minimalOrder = $this->input->post('minimalOrder');


		$data = array(
		'namaLayanan' => $namaLayanan,
		'harga' => $harga,
		'minimalOrder' => $minimalOrder,
		'idKategori' => 'K001',
		'satuan' => 'kg'
		);

		$this->m_main->input_layanan($data,'kodejasa');
		redirect('CGabung/infoLayanan');

	}

	function aksi_input3b(){

		$namaLayanan = $this->input->post('namaLayanan');
		$harga = $this->input->post('harga');
		$minimalOrder = $this->input->post('minimalOrder');


		$data = array(
		'namaLayanan' => $namaLayanan,
		'harga' => $harga,
		'minimalOrder' => $minimalOrder,
		'idKategori' => 'K002',
		'satuan' => 'pcs'
		);

		$this->m_main->input_layanan($data,'kodejasa');
		redirect('CGabung/infoLayanan');

	}

	function aksi_input3c(){

		$namaLayanan = $this->input->post('namaLayanan');
		$harga = $this->input->post('harga');
		$minimalOrder = $this->input->post('minimalOrder');


		$data = array(
		'namaLayanan' => $namaLayanan,
		'harga' => $harga,
		'minimalOrder' => $minimalOrder,
		'idKategori' => 'K003',
		'satuan' => 'pcs'
		);

		$this->m_main->input_layanan($data,'kodejasa');
		redirect('CGabung/infoLayanan');

	}


}