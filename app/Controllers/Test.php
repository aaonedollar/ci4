<?php

namespace App\Controllers;

use App\Models\testModel;

class Test extends BaseController
{

    protected $testmodel;

    public function __construct()
    {
        $this->testmodel = new testModel();
    }

    public function index()
    {

        $test = $this->testmodel->findAll();
        $data = [
            'title' => 'test',
            'test' => $test
        ];
        return view('test', $data);
    }


    //--------------------------------------------------------------------

}
