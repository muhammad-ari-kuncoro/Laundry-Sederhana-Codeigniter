<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Model_search extends CI_Model
{
	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('tb_transaksi');
		$this->db->like('nama_otlet', $keyword);
		$this->db->or_like('nama_pelanggan',$keyword);
		$this->db->or_like('tgl',$keyword);
		$this->db->or_like('batas_waktu',$keyword);
		$this->db->or_like('nama_paket',$keyword);
		$this->db->or_like('total',$keyword);
		$this->db->or_like('tgl_bayar',$keyword);
		$this->db->or_like('dibayar',$keyword);
		$this->db->or_like('nama_penginput',$keyword);
		return $this->db->get()->result();
	}
	
}