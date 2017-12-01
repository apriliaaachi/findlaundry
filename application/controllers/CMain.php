<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class CMain extends CI_Controller{


	function __construct(){
		parent::__construct();

		$this->load->model('m_main');
	
		
	}

	function index(){

		$dataLaundry = $this->m_main->getDataLaundry(); //data laundry
		$i=0;
		$dataKategori = $this->m_main->getKategori(); //table layanan
		foreach ($dataLaundry as $laundry) {
			$allData[$i]['namaLaundry']=$laundry['namaLaundry'];
			$allData[$i]['alamat']=$laundry['alamat'];
			$allData[$i]['gambar']=$laundry['gambar'];
			$allData[$i]['idLaundry']=$laundry['idLaundry'];
			$kategori1=null;
			$kategori2=null;
			$kategori3=null;
			foreach ($dataKategori as $kategori) {
				if($kategori['idLaundry'] == $laundry['idLaundry'] && $kategori['idKategori'] == 'K001'){
					$kategori1=$kategori['namaKategori'].' ';

				} else if($kategori['idLaundry'] == $laundry['idLaundry'] && $kategori['idKategori'] == 'K002'){
					$kategori2=$kategori['namaKategori'].' ';

				} else if($kategori['idLaundry'] == $laundry['idLaundry'] && $kategori['idKategori'] == 'K003'){
					$kategori3=$kategori['namaKategori'];

				}
			}

			$allData[$i]['kategori']=$kategori1.$kategori2.$kategori3;
			$i++;
			
		}

		$data['laundry'] = $allData;
		$this->template->load('viewStatic', 'viewMain', $data);

	}	

}
