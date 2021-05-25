<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;


class ProgramathorController extends Controller
{
    public function getJobs()
    {
        try {
            $url = urldecode('https://programathor.com.br/jobs-php?expertise=J%C3%BAnior');
            $client = new Client();
            $data = [];

            $crawler = $client->request('GET', $url);

            $urls = $crawler->filter('.cell-list')->each(function ($node) use ($data) {

                $title = $node->filter('h3.text-24')->each(function ($innerNode) {
                    return $innerNode->text();
                });

                $url = $node->filter('a')->extract(['href']);
                if (!empty($url)) {
                    $url = 'https://programathor.com.br' . $url[0];
                }
                
                $details = $node->filter('span')->each(function ($innerNode) {
                    return $innerNode->text();
                });


                if (!empty($title)) {
                    $data["title"] = $title[0];
                    $data["url"] = $url;
                    $data["job_details"] = $details;

                    return $data;
                }
            });

            $data = $urls;

       
            return response()->json(["data" => $data, 200]);
        
        } catch (\Exception $ex) {
            return response()->json(["Error" => $ex->getMessage()]);
        }
    }
}
