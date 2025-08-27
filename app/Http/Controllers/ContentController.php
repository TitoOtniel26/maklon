<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }
    public function article(){
        return view('admin.article');
    }
    public function seoTools(){
        return view('admin.seo');
    }
    public function monetization(){
        return view('admin.monetization');
    }
    public function userSetting(){
        return view('admin.user');
    }
    public function setting(){
        return view('admin.setting');
    }
    public function category(){
        return view('admin.category');
    }
    public function tag(){
        return view('admin.category');
    }
    public function template(){
        return view('admin.template');
    }
    public function keyword(){
        return view('admin.keyword');
    }
    public function role(){
        return view('admin.role');
    }
    public function monetizationSetting(){
        return view('admin.monetization_setting');
    }
    public function mediaLibrary(){
        return view('admin.media');
    }
    public function language(){
        return view('admin.language');
    }
}
