<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {
        return view('home.index');
    }
    public function shop() {
        return view('home.shop');
    }
    public function blog() {
        return view('home.blog');
    }
    public function storeloc() {
        return view('home.storeloc');
    }

    public function depo() {
        return view('home.depo');
    }
    public function aboutus() {
        return view('home.aboutus');
    }
    public function privacy() {
        return view('home.privacy');
    }
    public function policy() {
        return view('home.policy');
    }
    public function order() {
        return view('home.order');
    }
    public function details($id)  {
        $product = Product::findOrFail($id);
        return view('home.details', compact('product'));
    }
}
