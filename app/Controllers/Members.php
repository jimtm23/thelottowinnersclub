<?php

namespace App\Controllers;

use Auth\Models\UserModel;
use Config\Services;

class Members extends BaseController
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
		$data['title'] = 'Member Page';
		echo view('templates/header', $data);
		echo view('templates/navbar');
		echo view('members/index.php');
		echo view('templates/footer');
		
	}

}