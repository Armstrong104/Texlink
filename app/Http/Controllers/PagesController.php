<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
        return view("website.pages.about");
    }

    public function contact(){
        return view("website.pages.contact");
    }
}
