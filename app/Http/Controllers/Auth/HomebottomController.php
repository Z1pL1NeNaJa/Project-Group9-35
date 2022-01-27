<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home2Controller extends Controller
{
    public function showwelcome(){
        return view('views.welcome');
    }
}
