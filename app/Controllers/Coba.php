<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index($nama = '', $umur = '')
    {
        return view('welcome_message');
    }

    public function test($nama = '', $umur = '')
    {
        // return view('welcome_message');
        echo "Nama Saya  $nama , Umur : $umur";
    }

    //--------------------------------------------------------------------

}
