<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CLaundry extends CI_Controller{

		function __construct(){
		parent::__construct();

		$this->load->model('m_main');

	}

	function index(){
		
	}

	function order(){
		$id = $this->uri->segment(3);
		$dataLayanan = $this->m_main->getLayanan($id);
		$data['kodeJasa'] = $dataLayanan;
		$kategori=null;
		$i=0;
		foreach ($dataLayanan as $key) {
			if($i==0) {
				$kategori[0]['idKategori'] = $key['idKategori'];
				$kategori[0]['namaKategori'] = $key['namaKategori'];
				$i++;

			} else {

				if($kategori[$i-1]['idKategori']!=$key['idKategori']){

					$kategori[$i]['idKategori'] = $key['idKategori'];
					$kategori[$i]['namaKategori'] = $key['namaKategori'];
					$i++;
				}
				
			}
		}

		$data['kategori'] = $kategori;
		$data['provinsi'] = $this->m_main->getProvinsi();
		$data['kota'] = $this->m_main->getKota();
		$data['kecamatan'] = $this->m_main->getKecamatan();

		$data['laundry'] = $this->m_main->getDetail($id);
		$this->template->load('viewStatic', 'viewLaundry', $data);
		//echo json_encode($data);
	}

	function aksi_checkout(){

		$tglPenjemputan = $this->input->post('tglPenjemputan');
		$alamatPenjemputan = $this->input->post('alamatPenjemputan');
		$tglPengembalian = $this->input->post('tglPengembalian');
		$alamatPengembalian = $this->input->post('alamatPengembalian');
		// $level = $this->input->post('$level');

		$data = array(
		'tanggal1' => $tglPenjemputan,
		'alamat1' => $alamatPenjemputan,
		'tanggal2' => $tglPenjemputan,
		'alamat2' => $alamatPenjemputan
		// 'level' => $level
		);

		$this->m_main->input_laundry($data,'laundry');
		redirect('CGabung/infoLayanan');

	}

	function wilayah_provinsi(){
		$provinsi = $$this->m_main->getProvinsi($id);
	}

	function wilayah_kota(){
		$provinsi = $$this->m_main->getKota($id);
	}

	function wilayah_kecamatan(){
		$provinsi = $$this->m_main->getKecamatan($id);
	}


}
