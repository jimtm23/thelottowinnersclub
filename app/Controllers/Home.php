<?php

namespace App\Controllers;

use Config\Services;
use DateTime;

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

        $pbData = (new Draw)->getLottoData("https://api.arizonalottery.com/v1/DrawGames/2/history");
        $mmData= (new Draw)->getLottoData("https://api.arizonalottery.com/v1/DrawGames/5/history");

        $pbWinArr = explode("-", $pbData[0]['winningNumbers']);    
        $pbWinNbr = $pbData[0]['winningBall'];
        $pbStrDrawDate = new DateTime( $pbData[0]['drawDate']);
        $pbStrNewDrawDate = new DateTime( $pbData[0]['nextDrawDate']);
        $pbStrNxtJPAmt = number_format($pbData[0]['nextJackpotAmount'],2);
        $pbDrawDate = date_create($pbData[0]['nextDrawDate']);

        $mmWinArr = explode("-", $mmData[0]['winningNumbers']);    
        $mmWinNbr = $mmData[0]['winningBall'];
        $mmStrDrawDate = new DateTime( $mmData[0]['drawDate']);
        $mmStrNewDrawDate = new DateTime( $mmData[0]['nextDrawDate']);
        $mmStrNxtJPAmt = number_format($mmData[0]['nextJackpotAmount'],2);
        $mmDrawDate = date_create($mmData[0]['nextDrawDate']);        

        $data['results'] = [
            'pbWinArr' => $pbWinArr, 'pbWinningBall' => $pbData[0]['winningBall']
            , 'pbDrawDate' => $pbStrDrawDate->format('D M j T Y')
            , 'pbNextDrawDate' => date_format($pbDrawDate, 'Y/m/d')
            , 'pbStrNextDrawDate' => $pbStrNewDrawDate->format('D M j T Y')
            , 'pbNextJackpotAmount' => $pbStrNxtJPAmt
            , 'mmWinArr' => $mmWinArr, 'mmWinningBall' => $mmData[0]['winningBall']
            , 'mmDrawDate' => $mmStrDrawDate->format('D M j T Y')
            , 'mmNextDrawDate' => date_format($mmDrawDate, 'Y/m/d')
            , 'mmStrNextDrawDate' => $mmStrNewDrawDate->format('D M j T Y')
            , 'mmNextJackpotAmount' => $mmStrNxtJPAmt

        ];

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
