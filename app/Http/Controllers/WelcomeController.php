<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //public function index()
    //{
      //  return view('welcome');
    //}
    public function contact() //追加
    {
        return view("contact"); //(a)view関数を使わずテキストを返す
    }
}
