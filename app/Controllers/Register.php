<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserModel;
 
class Register extends Controller
{
    public function index()
    {
        //include helper form
        helper(['form']);
        $data['title'] = 'The Lotto Winners Club';
        echo view('templates/header', $data);
		echo view('templates/navbar');
        echo view('user/register.php', $data);
        echo view('templates/footer');
    }
 
    public function save()
    {
        //include helper form
        helper(['form']);
        //set rules validation form
        $rules = [
            'name'          => 'required|min_length[3]|max_length[20]',
            'email'         => [
                'label' => 'Email Address',
                'rules' => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
                'errors' => [
                    'is_unique' => 'Email already exist!'
                ]
            ],
            'password'      => [
                'label'  => 'Password',
                'rules'  => 'required|min_length[10]'
            ],
            'confpassword'  => [
                'label' => 'Confirm Password',
                'rules' => 'matches[password]'
            ]
        ];
        
        $validationMessage = [
            'confpassword' => 'The confirm password field does not match the password field.'
        ];  
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'user_name'     => $this->request->getVar('name'),
                'user_email'    => $this->request->getVar('email'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->save($data);
            return redirect()->to('/login');
        }else{
            $data['validation'] = $this->validator;
            $data['title'] = 'The Lotto Winners Club';
            echo view('user/header', $data);
		    echo view('user/navbar');
            echo view('user/register.php');
        }
         
    }
 
}