<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function home()
    {
        $pessoas = ['Portela', 'Pablo', 'Daniel'];
        return view('welcome', ['pessoas'=> $pessoas]);
    }

    public function about()
    {
        return view('about');
    }
}
