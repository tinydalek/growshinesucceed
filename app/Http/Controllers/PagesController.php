<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    public function home()
    {      
        return view('pages.index');
    }

    public function about()
    {
        $firstName = "Hannah";
        $lastName = "Trenowden";
        
        return view('pages.about', compact('firstName', 'lastName'));
    }

    public function contact()
    {      
        return view('pages.contact');
    }
}
