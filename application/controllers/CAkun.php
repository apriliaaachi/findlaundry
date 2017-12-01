<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CAkun extends CI_Controller{

	function index(){
		if($this->session->userdata("status")=="login") {

			$this->template->load('viewStatic', 'viewAkun');

		} else {
			echo ("error, silahkan login terlebih dahulu");
		}

	}

	function statusPesanan(){
		if($this->session->userdata("status")=="login") {

			$this->template->load('viewStatic', 'viewStatusPesanan');

		} else {
			echo ("error, silahkan login terlebih dahulu");
		}

	}

	function daftarPesanan(){
		if($this->session->userdata("status")=="login") {

			$this->template->load('viewStatic', 'viewDaftarPesanan');

		} else {
			echo ("error, silahkan login terlebih dahulu");
		}

	}

	function bantuan(){
		if($this->session->userdata("status")=="login") {

			$this->template->load('viewStatic', 'viewBantuan');

		} else {
			echo ("error, silahkan login terlebih dahulu");
		}


	}

	function aksi_daftarDiri(){
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
		'level' => 'owner'
		);

		$this->m_main->input_owner($data,'user');
		redirect('CGabung/infoLaundry');
	}


}
