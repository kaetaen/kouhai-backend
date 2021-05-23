<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpClient\HttpClient;
use Goutte\Client;

class CathoController extends Controller
{
    public function getJobs ()
    {
        try {
            $url = 'https://www.catho.com.br/vagas/programador-php-junior/';
            $client = new Client();
            $data = [];

            $crawler = $client->request('GET', $url);

            $vacancy_keys = [
                'url',
                'title',
                'pay_scale',
                'updated_at',
                'description'
            ];

            $vacancy_values = $crawler->filter('li[data-gtm-dimension-37]')->each(function($node) use($url) {
                $vacancy_values = $node->extract([
                    'data-gtm-dimension-37',
                    'data-gtm-dimension-38',
                    'data-gtm-dimension-41',
                    'data-gtm-dimension-44',
                ]);

                $description = $node->filter('.job-description')->text();
                
                array_push($vacancy_values[0], $description);
                $vacancy_values[0][0] = $url . $vacancy_values[0][0];
                
                return $vacancy_values;
            });

            foreach ($vacancy_values as $value) {
                $data[] = array_combine($vacancy_keys, $value[0]);
            }

            return response()->json(['data' => $data], 200);
        
        } catch (\Exception $ex) {
            return response()->json(['Error' => $ex->getMessage()], 500);
        } 
    }
}
