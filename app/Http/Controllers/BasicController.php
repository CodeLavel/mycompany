<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    //ฟังก์ชั่น HOME
    public function home(){
        return view('fontend.pages.home');
    }
    public function about(){
        return view('fontend.pages.about');
    }
    public function service(){
        return view('fontend.pages.service');
    }
    public function portfolio(){
        return "Portfolio Page";
    }
    public function contact(){
        return view('fontend.pages.contact');
    }
    public function login(){
        return view('fontend.pages.login');
    }
}
