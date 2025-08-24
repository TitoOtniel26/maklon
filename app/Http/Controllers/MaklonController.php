<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaklonController extends Controller
{
    public function index(){
        return view('maklon.master');
    }
}
