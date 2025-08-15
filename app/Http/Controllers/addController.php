<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class addController extends Controller
{
    public function add($x, $y){
        return "the summ will be" . $x + $y;
    }
    public function sub($x, $y){
        return "the summ will be" . $x - $y;
    }
}
