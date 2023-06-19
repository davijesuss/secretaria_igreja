<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class igrejaController extends Controller
{
    //
    public function index (){
        return view('igreja.index');
    }
}
