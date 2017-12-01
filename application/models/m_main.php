<?php 
 
class M_main extends CI_Model{	

	//isi dari table laundry untuk pilihan item pertama kali (rekomendasi)
	function getLaundry(){	

		$laundry= $this->db->query('SELECT * FROM laundry ORDER BY idLaundry desc');
		return $laundry;
	}	

	//isi dari table laundry untuk detail item dihalaman selanjutnya
	function getDetail($id){
		$item = $this->db->select('*')
						->FROM ('laundry')
						->where('idLaundry', $id)
						->get();

		$data = $item->result_array();
		return $data;

	}

	//isi dari table gabungan dari table jasa/kategori dan kodejasa/layanan untuk mengisi tab dan isi tab
	function getLayanan($id){
		$layanan = $this->db->query ("Select * FROM kodeJasa inner join jasa on (kodeJasa.idKategori=jasa.idKategori) where idLaundry = '$id' order by kodeJasa.idKategori");
		$data = $layanan->result_array();
		return $data;
	}

	//input data kedalam table user sebagai owner
	function input_owner($data, $table){

		return $this->db->insert($table, $data);
	}

	//input data kedalam table laundry
	function input_laundry($data, $table){

		return $this->db->insert($table, $data);
	}

	//input data kedalam table kodejasa/layanan
	function input_layanan($data, $table){

		return $this->db->insert($table, $data);
	}

	function getWilayah(){
		$provinsi = $this->db->query('SELECT * FROM wilayahprovinsi; ');
		return $provinsi;
	}

	function getDataLaundry(){	

		$laundry= $this->db->query('SELECT * FROM laundry ORDER BY idLaundry desc')->result_array();
		return $laundry;
	}

	function getKategori(){
		$dataLayanan = $this->db->query('SELECT * FROM kodeJasa inner join jasa on (kodeJasa.idKategori = jasa.idKategori)')->result_array();
		return $dataLayanan;
	}

	function getProvinsi(){
		$dataProvinsi = $this->db->query('SELECT * FROM wilayahprovinsi')->result_array();
		return $dataProvinsi;
	}

	function getKota(){
		$dataKota = $this->db->query('SELECT * FROM wilayahkota')->result_array();
		return $dataKota;
	}

	function getKecamatan(){
		$dataKecamatan = $this->db->query('SELECT * FROM wilayahkecamatan')->result_array();
		return $dataKecamatan;
	}

	//input data kedalam table user yang terLogin
	function input_dataDiri($data, $table){

		return $this->db->insert($table, $data);
	}

}