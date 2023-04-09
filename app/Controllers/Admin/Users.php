<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Users extends BaseController
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
