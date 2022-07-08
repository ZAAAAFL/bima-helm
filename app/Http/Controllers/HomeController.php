<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            "title" => "Home"
        ]);
    }

    public function faq()
    {
        return view('pages.faq', [
            "title" => "Frequently Asked Question"
        ]);
    }

    public function tentangkami()
    {
        return view('pages.tentang-kami', [
            "title" => "Tentang Kami"
        ]);
    }
    public function carabelanja()
    {
        return view('pages.cara-belanja', [
            "title" => "Cara Belanja"
        ]);
    }
}