<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Draw extends Controller
{
    public function game($name)
    {
        switch ($name) {
            case 'powerball':
                $results = $this->getLottoData("https://api.arizonalottery.com/v1/DrawGames/2/history");
                $data['results'] = $results;
                break;
            case 'megamillions':
                $results = $this->getLottoData("https://api.arizonalottery.com/v1/DrawGames/5/history");
                $data['results'] = $results;
                break;
            default;
                print_r("404");
        }

        $data['title'] = 'The Lotto Winners Club';
        echo view('templates/header', $data);
        echo view('templates/navbar');
        echo view('draw/game');
        echo view('templates/footer');
    }

    private function getLottoData($url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPGET, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);

        $jsonResult = json_decode($result, true);
        return $jsonResult;
    }
}