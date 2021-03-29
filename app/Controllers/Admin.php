<?php

namespace App\Controllers;

use App\Models\Customers;
use CodeIgniter\Database\Query;
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

        $data['title'] = 'Admin Page';
        //$data['results'] = $users->findAll(100);



        $data['results'] = $this->viewCustomers();
        //$data['results'] = $query;
        echo view('templates/header', $data);
        echo view('templates/navbar');
        echo view('admin/index.php',);
        echo view('templates/footer');
    }

    private function viewCustomers()
    {

        $customers = new Customers();

        $sessData = isset($_SESSION['userData']) ? $sessData = $_SESSION['userData'] : null;

        $records = $customers->asArray()->findAll();

        //echo var_dump($records);


        $newArray = [];
        
        $result = [];
        foreach ($records as $record) {
            $result[] =  ['user_id'=>$record['user_id']
            ,'name'=>$record['first_name'] . " " . $record['last_name']
            ,'address'=>$record['addr_no'] . " " . $record['addr_bldg']
                ." ".$record['addr_street'] . " " . $record['addr_state']
                ." ".$record['addr_country']        
            ,'contact_no'=>$record['contact_no']
            ,'status'=>$record['status'] 
        ];
        
        }

        return $result;
    }
}
