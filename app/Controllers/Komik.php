<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    public function index()
    {

        $data = [
            'title' => 'Daftar Komik'
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

        $komikmodel = new KomikModel();
        $komik = $komikmodel->findAll();

        dd($komik);


        return view('komik/index', $data);
    }
}
