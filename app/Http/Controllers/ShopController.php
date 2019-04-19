<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ShopController extends Controller
{
    public function index()
    {
      return view('shop.index');
    }

    public function show()
    {
      $products = Product::all();
      return view('shop.show', compact('products'));
    }

    public function form()
    {
      return view('shop.form');
    }

    public function info()
    {
      return view('shop.info');
    }

    public function cart()
    {
      return view('shop.cart');
    }

    public function register()
    {
      return view('shop.register');
    }

    public function login()
    {
      return view('shop.login');
    }
}
