<?php

namespace App\Http\Controllers;
use http\Env\Request;

class ApplicationController extends Controller
{
    public function home()
    {

        return view('welcome');
    }

    public function about()
    {

        return view('about');
    }

    public function contact()
    {

        return view('contact');
    }

    public function contactAction(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required||min:3'
        ]);
        return 'welcome';
    }
}

