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
    public function deleteCustomer(){
        $userID = $this->request->getPost('userID');
		helper('text');

        $customers = new Customers();
        $customer = $customers->asArray()->where('user_id', $userID)->first();
        var_dump($customer);

        try {
            $customers->delete($customer['seq']);
        } catch (\Exception $e) {            
            echo $e->getMessage();
        }
        //var_dump($userID);

     
        return redirect()->to('/admin')->with('success', lang('Cutomer deleted'));

    }

    public function saveCustomer()
	{
        $userID = $this->request->getPost('user_id');
		helper('text');

        $customers = new Customers();
        $customer = $customers->asArray()->where('user_id', $userID)->first();

        $custUpd = [
            //'user_id'       => $customer['user_id'],
            'first_name'    => $this->request->getPost('firstName'),
            'middle_name'   => $this->request->getPost('middleName'),
            'last_name'     => $this->request->getPost('lastName'),
            'suffix'        => $this->request->getPost('suffix'),
            //'status'        => $this->request->getPost('status'),
            'addr_no'       => $this->request->getPost('addr_num'),
            'addr_bldg'     => $this->request->getPost('addr_bldg'),
            'addr_street'   => $this->request->getPost('addr_street'),
            'addr_state'    => $this->request->getPost('addr_state'),
            'addr_country'  => $this->request->getPost('addr_country'),
            'addr_zipcode'  => $this->request->getPost('addr_zipcode'),
			'contact_no'  	=> $this->request->getPost('contact_no'),
            'id_type'       => "sample",
            'id_photo'      => "sample",
            'face_photo'    => "sample",
            'attachment'    => "sample",
            'notes'         => "sample"
        ];
        try {
            $customers->update($customer['seq'],$custUpd);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

     
        return redirect()->to('/members/maintain?userID=' . $userID)->with('success', lang('Cutomer Saved'));
	}


}
