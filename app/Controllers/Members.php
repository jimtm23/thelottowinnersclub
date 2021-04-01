<?php

namespace App\Controllers;

use App\Models\Customers;
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
        $users = new UserModel();
		$user = $users->find($this->session->get('userData.id'));

        $transModel = new Transactions();
        
        $data['title'] = 'Member Page';
        $data['results'] = $transModel->findAll(100);
        echo view('templates/header', $data);
        echo view('templates/navbar');         
        echo view('members/index.php',);
        echo view('templates/footer');
    }

    public function maintain()
    {
        $userid= $_GET['userID'];
        $customers = new Customers();
        $customer = $customers->asArray()->where('user_id', $userid)->first();
        
        $data['title'] = 'Member Maintain Page';
        $data['userdata'] = $customer;
        echo view('templates/header', $data);
        echo view('templates/navbar');                
        echo view('members/maintainmember', ['config' => $this->config]);
        echo view('templates/footer');
    }


}
