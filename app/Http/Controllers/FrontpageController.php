<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontpageController extends Controller
{
    public function index(){
        $pageDescription = 'Homepage Description';

        return view('index',compact(['pageDescription']));
    }

    public function aboutMe(){
        $pageTitle = 'About Me';
        $pageDescription = 'Get to know me more';

        return view('frontpages.about-me',compact(['pageTitle','pageDescription']));
    }

    public function contacts(){
        return view('frontpages.contact');
    }
    public function privatePolicy(){
        return view('frontpages.privacy-policy');
    }
    public function tAndC(){
        return view('frontpages.terms-conditions');
    }
  
}
