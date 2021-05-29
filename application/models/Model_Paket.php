<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Paket extends CI_Model
{
	public function getAllPaket()
	{
		return $this->db->get('tb_paket')->result_array();
	}

}