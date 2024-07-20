<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() {
        return view('home');
    }

    public function howToBuy() {
        return view('howToBuy');
    }

    public function support() {
        return view('support');
    }

    public function contact() {
        return view('contact');
    }

    public function cart() {
        return view('cart');
    }
}
