<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Model_cetak extends CI_Model
{
	function gettahun()
	{
		$query = $this->db->query("SELECT YEAR(tgl) AS tahun FROM tb_transaksi GROUP BY YEAR(tgl) ORDER BY YEAR(tgl) ASC");

		return $query->result();
	}

	function filterbytanggal($tglawal,$tglakhir)
	{
		$query = $this->db->query("SELECT * FROM tb_transaksi WHERE tgl BETWEEN '$tglawal' AND '$tglakhir' ORDER BY tgl ASC ");

		return $query->result();
	}

	function filterbybulan($tahun1,$bulanawal,$bulanakhir){
		$query = $this->db->query("SELECT * FROM tb_transaksi WHERE YEAR(tgl) ='$tahun1' and MONTH(tgl) BETWEEN '$bulanawal' AND '$bulanakhir' ORDER BY tgl ASC ");

		return $query->result();
	}	
	function filterbytahun($tahun2){
		$query = $this->db->query("SELECT * FROM tb_transaksi WHERE YEAR(tgl) ='$tahun2' ORDER BY tgl ASC ");

		return $query->result();
	}	

}