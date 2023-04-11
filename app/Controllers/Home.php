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
		$komik = $this->komikmodel->findAll();
		$data = [
			'title' => 'Daftar Komik',
			'komik' => $komik
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


		$detail = $this->komikmodel->where(['slug' => $slug])->first();


		$data = [
			'title' => $slug,
			'dt' => $detail
		];

		return view('komik/detail', $data);
	}
}
