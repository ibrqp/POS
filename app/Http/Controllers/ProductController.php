<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        return view('products.food-beverage', ['category' => 'Food & Beverage']);
    }

    public function beautyHealth()
    {
        return view('products.beauty-health', ['category' => 'Beauty & Health']);
    }

    public function homeCare()
    {
        return view('products.home-care', ['category' => 'Home Care']);
    }

    public function babyKid()
    {
        return view('products.baby-kid', ['category' => 'Baby & Kid']);
    }
}
