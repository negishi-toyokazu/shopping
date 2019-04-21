<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Cart;
use App\Order;
use Illuminate\Support\Facades\Auth;

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

    public function add(Request $request)
    {
      $cart = new Cart;
      $cart->user_id = Auth::id();
      $cart->product_id = $request->input('product_id');
      $form = $request->all();
      unset($form['_token']);
      $cart->fill($form);
      $cart->save();

      session()->flash('message', 'カートに追加しました。');
      return redirect('/shop/show');
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
      $user_id = Auth::id();
      $cart = Cart::where('user_id', $user_id)->get();

      return view('shop.cart', compact('cart') );
    }

    public function kakunin()
    {
      return view('shop.kakunin');
    }




    public function register()
    {
      return view('shop.register');
    }

    public function login()
    {
      return view('shop.login');
    }

    public function registerConp()
    {
      session()->flash('message', '会員登録が完了しました');
      return view('shop.register_conp');
    }

}
