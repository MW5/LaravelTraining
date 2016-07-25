<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class catListController extends Controller
{
    function cats() {
        $cats = DB::table('cats')->get();
        return view('pages.cats', compact('cats'));
    }
}
