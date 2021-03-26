<?php

namespace App\Controllers;

use App\Models\Customers;
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
        echo view('templates/header', $data);
        echo view('templates/navbar');
        echo view('admin/index.php',);
        echo view('templates/footer');
    }

    private function viewCustomers()
    {
        $db = db_connect();
        $customers = new Customers();
        $sessData = $_SESSION['userData'];
        //$result = $customers->get_where('customers', array('user_id' => $sessData['email']));
        //$result = $customers->getCustomerDetails($sessData['email']);

        $sql = "SELECT * FROM customers WHERE user_id = ?";        

        $query = $db->query($sql, [$sessData['email']]);
        //$db->close();
        

        foreach ($query->getResult('array') as $row) {
            echo $row['user_id'];
            echo $row['first_name'];
            
        }
    }
}
