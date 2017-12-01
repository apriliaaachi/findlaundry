<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CLayananPelanggan extends CI_Controller{

	function index(){
		$this->template->load('viewStatic', 'viewLayananPelanggan');
	}

	// function login(){
	// 	$this->template->load('viewStatic', 'viewLayananPelanggan');
	// }
}

