<?php

namespace App\Controllers;

use Config\Services;

class Home extends BaseController
{

    /**
     * Access to current session.
     *
     * @var \CodeIgniter\Session\Session
     */
    protected $session;

    /**
     * Authentication settings.
     */
    protected $config;


    //--------------------------------------------------------------------

    public function __construct()
    {
        // start session
        $this->session = Services::session();

        // load auth settings
        $this->config = config('Auth');
    }

    //--------------------------------------------------------------------


    public function index()
	{
		$data['title'] = 'The Lotto Winners Club';
		echo view('templates/header', $data, [
            'userData' => $this->session->userData,
            'config' => $this->config
        ]);
		echo view('templates/navbar');
		echo view('home/index');
		echo view('templates/footer');
	}

}
