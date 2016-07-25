<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Cat;

class catListController extends Controller
{
    function cats() {
        $cats = Cat::all();
        return view('pages.cats', compact('cats'));
    }
    function show(Cat $cat) {
        //the argument has to have the same name as in routing!
        //when it`s typehinted Laravel automatically finds the correct entry in
            //the DB and initializes the variable with it`s json data
        return view('pages.cat',compact('cat'));
    }
}
