<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Product;

class ShopController extends Controller
{
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


}
