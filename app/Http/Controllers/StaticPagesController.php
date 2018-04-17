<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home(){
        return view('static_page.home');
        //return '主页';
    }

    public function help(){
        return view('static_page/help');
        //return '帮助页';
    }

    public function about(){
        return view('static_page/about');
        //return '关于页';
    }
}
