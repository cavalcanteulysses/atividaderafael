<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Local;

class LocalController extends Controller
{
    public function index(){

        $locals = Local::all();
        return view('compras.create',['locals'=>$locals]);

    }
}
