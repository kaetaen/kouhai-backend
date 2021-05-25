<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CathoController;
use App\Http\Controllers\ProgramathorController;


class JobsController extends Controller
{
    private $catho;
    private $programathor;

    public function __construct (ProgramathorController $programathor, CathoController $catho)
    {
        $this->catho = $catho;
        $this->programathor = $programathor;
    }

    public function listAll ()
    {
        try {
            $catho_jobs = $this->catho->getJobs()->getData();
            $programathor_jobs = $this->programathor->getJobs()->getData();
            
            $data = [
                "catho" => $catho_jobs->data,
                "programathor" => $programathor_jobs->data
            ];
            
            return response()->json(["data" => $data]);
    
        } catch (\Exception $ex) {
            return response()->json(["data" => $ex->getMessage()]);
        }
    }
}
