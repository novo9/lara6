<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function description($name){
        $age = 56;
        return view('describe',compact('name','age'));
    }
}
