<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaklonController extends Controller
{
    public function index(){
        return view('maklon.home');
    }

    public function register(){
        return view('maklon.register');
    }

    public function write(){
        return view('maklon.write');
    }

    public function sharing(){
        return view('maklon.share');
    }

    public function optimization(){
        return view('maklon.optimazitation');
    }

    public function designNow(){
        return view('maklon.design');
    }

    public function videoNow(){
        return view('maklon.video');
    }

    public function faq(){
        return view('maklon.faq');
    }

    public function tentangKita(){
        return view('maklon.tentangkita');
    }

    public function karir(){
        return view('maklon.karir');
    }

    public function kebijakanPrivasi(){
        return view('maklon.kebijakanprivasi');
    }

    public function contactUs(){
        return view('maklon.contact');
    }



}
