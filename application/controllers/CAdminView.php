<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CAdminView extends CI_Controller{

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("CLogin"));
		}
	}

	function index(){
		
		$this->template->load('admin/viewAdminStatic', 'admin/viewAkun');
	}

	function tabelTransaksi(){
		
		$this->template->load('admin/viewAdminStatic', 'admin/viewTabelTransaksi');
	}

	function bantuan(){
		
		$this->template->load('admin/viewAdminStatic', 'admin/viewBantuan');
	}


}
