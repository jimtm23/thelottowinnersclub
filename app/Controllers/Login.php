<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{
		$data['title'] = 'The Lotto Winners Club';
		echo view('templates/header', $data);
		echo view('templates/navbar');
		echo view('about/index');
		echo view('templates/footer');
		
	}

}
