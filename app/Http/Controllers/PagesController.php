<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        
         // 変数に値をセット
         $first_name = "Luke";
         $last_name = "Skywalker";

        //view関数の第二引数に配列を渡す
        return view('pages.about', compact('first_name', 'last_name'));
    }
}
