<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;
use App\Notice;

class ShopController extends Controller
{

    public function top()
    {
      return view('admin.top');
    }

    public function addProduct()
    {
        return view('admin.product');
    }

    public function create(Request $request)
    {
        $this->validate($request, Product::$rules);
        $products = new Product;
        $form = $request->all();

        if (isset($form['image'])) {
            $path = $request->file('image')->store('public/image');
            $products->image_path = basename($path);
        } else {
            $products->image_path = null;
        }

        unset($form['_token']);
        unset($form['image']);
        $products->fill($form);
        $products->save();

        return redirect('/admin/product/conp');
    }

    public function conpProduct()
    {
      return view('admin.product_conp');
    }

    //お知らせ
    public function notice()
    {
      return view('admin.notice');
    }

    public function addNotice(Request $request)
    {
      $this->validate($request, Notice::$rules);
      $notice = new Notice;
      $notice->content = $request->input('content');
      unset($request['_token']);
      $notice->save();

      session()->flash('message', 'お知らせを追加しました。');
      return redirect('/admin');
    }


}
