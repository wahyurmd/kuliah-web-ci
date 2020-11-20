<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['pesan1'] = "Belajar Pemrograman Web 3";
		$data['pesan2'] = "Berbasis Framework";
		$data['pesan3'] = "Framework CI";
		$data['pesan4'] = "Tampilan Pertama";
		$this->load->view('myview', $data);
	}

	public function profile()
	{
		$data['pesan1']  = "327602051200000";
		$data['pesan2']  = "WAHYU RAMADHANI";
		$data['pesan3']  = "JAKARTA, 05-12-2000";
		$data['pesan4']  = "LAKI-LAKI";
		$data['pesan5']  = "KP. KEBAYUNAN";
		$data['pesan6']  = "004/019";
		$data['pesan7']  = "TAPOS";
		$data['pesan8']  = "TAPOS";
		$data['pesan9']  = "ISLAM";
		$data['pesan10'] = "BELUM KAWIN";
		$data['pesan11'] = "PELAJAR/MAHASISWA";
		$data['pesan12'] = "WNI";
		$data['pesan13'] = "SEUMUR HIDUP";
		$this->load->view('data_profil', $data);
	}
}
