<?php 
 
class M_register extends CI_Model{	

	function cek_register($data, $table){	

		return $this->db->insert($table, $data);
	}	
}