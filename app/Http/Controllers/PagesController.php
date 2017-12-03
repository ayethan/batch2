<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
    	$names = ['atk', 'sat' , 'sun'];
       return view('pages.about', compact('names'));

    }public function contact()
    
    {
       return view('pages.contact');
    }
}
