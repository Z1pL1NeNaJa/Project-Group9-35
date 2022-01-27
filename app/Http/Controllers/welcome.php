<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Homepage;
use App\background;
use App\Contents;
use Illuminate\Http\Request;

class welcome extends Controller
{
    public function promotion(Request $requets)
    {
        $Homepages = Homepage::all();
        
        $background=background::all();

        $Contents=Contents::all();

        return view('welcome',compact('Homepages','background','Contents'));
    }
}
