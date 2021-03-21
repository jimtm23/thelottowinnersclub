<?php


namespace App\Controllers;


class TestEmail extends \CodeIgniter\Controller
{
    public function send() {
        $email = \Config\Services::email();

        $email->setTo('jimmartinez23@gmail.com');

        $email->setSubject('Email Test');
        $email->setMessage('Testing the email class.');

        if($email->send()){
            //Success email Sent
            echo "SUCCESS";
        }else{
            //Email Failed To Send
            echo $email->printDebugger();
        }
    }
}