<?php  

/**
* 
*/
class Product
{
	private $nama;
	private $jenis;

	public function __construct(){
		echo "Ini dari konstruktor";
	}

	public function set_nama($nama){
		$this->nama = $nama;
	}	

	public function get_nama(){
		return $this->nama;
	}

	public function __destruct(){
		echo "Ini dari destruktor";
	}

}

$Product = new Product(); //instansiasi
$Product->set_nama("Achi");
echo "Nama saya adalah".$Product->get_nama();

?>