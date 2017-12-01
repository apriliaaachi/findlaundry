<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CDaftarLaundry extends CI_Controller{

	function index(){
		$this->template->load('viewStatic', 'viewDaftarLaundry');
	}
}
