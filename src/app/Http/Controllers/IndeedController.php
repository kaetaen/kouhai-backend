<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;

class IndeedController extends Controller
{
    public function getJobs() {
        $url = 'https://br.indeed.com/empregos-de-Programador';
        $client = Client();
    }
}
