<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bus extends Controller
{
    public function listbus(){
        //echo "<h1>First App</h1>";
        return view("bus");
    }
}
