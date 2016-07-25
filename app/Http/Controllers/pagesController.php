<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pagesController extends Controller
{
    function home() {
        return view('pages.home');
    }
    function about() {
        return view('pages.about');
    }
}
