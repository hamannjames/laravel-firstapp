<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Str;

class PagesController extends Controller
{
    public function index() {
        $pages = \App\Pages::latest()->get();
        return view('pages.index', compact('pages'));
    }

    public function show($slug) {
        $page = \App\Pages::where('slug', $slug)->firstOrFail();
        return view('pages.single', compact('page'));
    }

    public function create() {
        return view('pages.create');
    }

    public function store() {
        $input = Request::all();
        $input['slug'] = str_slug($input['title'], '-');
        \App\Pages::create($input);

        return redirect('pages');
    }
}
