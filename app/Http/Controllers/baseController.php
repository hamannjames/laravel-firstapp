<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class baseController extends Controller
{
    function index() {
        $first = 'James';
        $last = 'Hamann';
        return view('home', compact('first', 'last'));
    }

    function about() {
        $name = 'James Hamann';
        return view('home')->with('name', $name);
    }
}
