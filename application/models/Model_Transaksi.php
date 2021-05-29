<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Transaksi extends CI_Model
{
	public function getAllTransaksi($keyword = null)
	{
		return $this->db->get('tb_transaksi')->result_array();
	}

}