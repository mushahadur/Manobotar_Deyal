<?php

namespace App\Http\Controllers\FrontSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('FrontSite.pages.home.homeIndex');
    }
}
