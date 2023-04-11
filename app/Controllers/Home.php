<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Home extends BaseController
{

	protected $komikmodel;
	public function __construct()
	{
		$this->komikmodel = new KomikModel();
	}

	public function index()
	{
		// $komik = $this->komikmodel->findAll();
		$data = [
			'title' => 'Daftar Komik',
			'komik' => $this->komikmodel->getKomik()
		];

		/* contoh manual
        $db = \Config\Database::connect();
        $komik = $db->query("SELECT * FROM komik");

        foreach ($komik->getResultArray() as $a) {
            d($a);
        }
    */

		// contoh namespace path ke Models  /  GANTINYA pakai use diatas 

		// $komikmodel = \App\Models\KomikModel();

		return view('komik/index', $data);
	}


	public function detail($slug)
	{

		$data = [
			'title' => 'komik',
			'd' => $this->komikmodel->getKomik($slug)
		];

		return view('komik/detail', $data);
	}


	public function create()
	{
		$data = [
			'title' => 'create'
		];

		return view('komik/create', $data);
	}
}
