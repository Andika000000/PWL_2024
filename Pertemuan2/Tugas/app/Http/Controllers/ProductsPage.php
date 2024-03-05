<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsPage extends Controller
{
    public function index() {
        return view('product.product');
    }

    public function foodbeverage() {
        return view('product.category',['category'=>'Food Beverage']);
    }

    public function homecare() {
        return view('product.category',['category'=>'Home Care']);
    }

    public function beautyhealth() {
        return view('product.category',['category'=>'Beauty Health']);
    }

    public function babykid() {
        return view('product.category',['category'=>'Baby Kid']);
    }
}