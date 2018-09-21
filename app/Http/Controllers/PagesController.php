<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function index() {
        $title = "Welcome to Laravel";
//        return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = "About Us";
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $services = array("title" => "Services", "lir" => "Services", "services" => ["Web Development", "Data Analysis", "Programming"]);
        return view('pages.services')->with($services);
    }

}
