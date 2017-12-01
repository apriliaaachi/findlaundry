<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLogin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}

	function index()
	{
		$this->template->load('formStatic', 'viewLogin');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		

		$where = array(
			'username' => $username,
			'password' => md5($password),
			);

		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek > 0) {
			$dataMember = $this->m_login->cek_login("user",$where)->result_array();

			$data_session = array(
				'nama' => $username,
				'status' => "login",
				'dataMember' => $dataMember,
				'level' => $dataMember[0]['level']
				);
 
			$this->session->set_userdata($data_session);
 			if($dataMember[0]['level']=='member'){

				redirect(base_url("index.php/CMain"));
 			} else if($dataMember[0]['level']=='admin'){
 				
				redirect(base_url("index.php/CAdminView"));
 			} else if($dataMember[0]['level']=='owner'){
 				
				redirect(base_url("index.php/CAkun"));
 			} 
			

		} else {
			echo "<script>alert('Username atau Password salah');history.go(-1);</script>";

		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/CMain'));
	}
}

