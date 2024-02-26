<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function foodBaverage()
    {
        return view('products.foodBaverage');
    }
    public function beautyHealth()
    {
        return view('products.beautyHealth');
    }
    public function homeCare()
    {
        return view('products.homeCare');
    }
    public function babyKid()
    {
        return view('products.babyKid');
    }
}
