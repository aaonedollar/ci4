<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		$data = [
			'title' => 'Test | CI4'
		];
		return view('komik/index', $data);
	}

	//--------------------------------------------------------------------

}
