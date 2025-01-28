<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //add metodo index
    public function index() {
        echo "Index";
        // return view('welcome');
    }

    public function about() {
        echo "about";
    }
}
