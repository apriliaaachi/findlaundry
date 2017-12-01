<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CRegister extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_register');
		$this->load->helper('url');
	}

	public function index()
	{
		$this->template->load('formStatic', 'viewRegister');
	}


	function aksi_register(){

		$namaLengkap = $this->input->post('namaLengkap');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		// $level = $this->input->post('$level');

		$data = array(
		'namaLengkap' => $namaLengkap,
		'email' => $email,
		'username' => $username,
		'password' => md5($password),
		'gambar' => 'user.png',
		'level' => 'member'
		// 'level' => $level
		);

		$this->m_register->cek_register($data,'user');
		redirect('CLogin');

	}
}
