<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');

	}
	public function penjumlahan($n1, $n2)
	{
		$this->load->model('Model_latihan1');
		$hasil = $this->Model_latihan1->jumlah ($n1, $n2);
		echo"Hasil penjumlahan dari" . $n1 . "+" . $n2 . "=" . $hasil;
	
	}
}
