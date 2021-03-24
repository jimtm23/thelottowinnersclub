<?php

namespace App\Controllers;

use Auth\Models\UserModel;
use Config\Services;
use PhpParser\Node\Expr\List_;

class Admin extends BaseController
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
        $users = new UserModel();		
        $data['title'] = 'Admin Page';
        $data['results'] = $users->findAll(100);
        echo view('templates/header', $data);
        echo view('templates/navbar');         
        echo view('admin/index.php',);
        echo view('templates/footer');
    }
}
