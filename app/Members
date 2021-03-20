<?php

namespace App\Controllers;

use Config\Services;

class Rules extends BaseController
{

    protected $session;

    protected $config;

    public function __construct()
    {
        // start session
        $this->session = Services::session();

        // load auth settings
        $this->config = config('Auth');
    }

	public function index()
	{
		$data['title'] = 'The Lotto Winners Club';
		echo view('templates/header', $data);
		echo view('templates/navbar');
		echo view('rules/index');
		echo view('templates/footer');
		
	}

}
