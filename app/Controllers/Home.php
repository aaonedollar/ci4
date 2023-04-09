<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		$data = [
			'title' => 'Test | CI4'
		];
		echo view('layout/header', $data);
		echo view('pages/home');
		echo view('layout/footer');
	}

	//--------------------------------------------------------------------

}
