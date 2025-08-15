<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello($name, $id){
        return view('hello.welcome', [
            'name' => $name,
            'id' => $id
        ]) ;
    }
}
