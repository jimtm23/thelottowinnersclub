<?php

namespace App\Controllers;

use App\Models\Transactions;
use Auth\Models\UserModel;
use Config\Services;
use PhpParser\Node\Expr\List_;

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
        $db = db_connect();
        
        $users = new UserModel();
		$user = $users->find($this->session->get('userData.id'));

        $transModel = new Transactions();
        $trans['trans'] = $transModel->findAll();
        
        echo view('members/index.php',$trans);
        echo view('templates/footer');
    }
}
