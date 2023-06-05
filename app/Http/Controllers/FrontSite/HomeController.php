<?php

namespace App\Http\Controllers\FrontSite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        return view('FrontSite.pages.home.homeIndex');
    }
    function contact(){
        return view('FrontSite.pages.contact.contactIndex');
    }
    function about(){
        return view('FrontSite.pages.about.aboutIndex');
    }
}
