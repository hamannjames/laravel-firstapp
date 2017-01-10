<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $pages = \App\Pages::all();
        return view('pages.index', compact('pages'));
    }

    public function slug($slug) {
        $page = \App\Pages::where('slug', $slug)->firstOrFail();
        return view('pages.single', compact('page'));
    }

    public function create() {
        return 'hello';
    }
}
