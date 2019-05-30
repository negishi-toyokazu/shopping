<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Cart;
use App\Order;
use App\Notice;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index()
    {
        $notices = Notice::orderBy('created_at', 'desc')->paginate(5);

        $ranking = DB::table('orders')
                  ->join('products', 'orders.product_id', '=', 'products.id')
                  ->select(DB::raw('count(*) as product_count, product_id, products.name'))
                  ->groupBy('product_id', 'products.name')
                  ->orderBy('product_count')
                  ->get();

        return view('shop.index', compact('notices', 'ranking'));
    }

    public function show()
    {
        $products = Product::all();
        return view('shop.show', compact('products'));
    }

    public function yasai()
    {
        $yasais = Product::where('category', '野菜')->get();

        return view('shop.yasai', compact('yasais'));
    }

    public function fruits()
    {
        $fruits = Product::where('category', '果物')->get();

        return view('shop.fruits', compact('fruits'));
    }


    public function add(Request $request)
    {
        $cart = Cart::firstOrCreate(
            ['product_id' => $request->product_id, 'user_id' => Auth::id()],
            ['product_id' => $request->product_id, 'user_id' => Auth::id(), 'number' => $request->number]
      );

        if ($cart->wasRecentlyCreated) {
            session()->flash('message', $cart->product->name.'をカートに追加しました。');
        } else {
            session()->flash('message', $cart->product->name.'はカートにすでに入っています。');
        }

        return redirect('/shop/show');
    }

    public function info()
    {
        return view('shop.info');
    }

    public function cart()
    {
        $user_id = Auth::id();
        $cart = Cart::where('user_id', $user_id)->get();

        return view('shop.cart', compact('cart'));
    }
    //カートの商品一つを削除
    public function cartDelete(Request $request)
    {
        Cart::find($request->id)->delete();
        session()->flash('message', 'カートから削除しました');
        return redirect('/shop/cart');
    }

    public function order(Request $request, $id)
    {
        $items = $request->input('items');
        foreach ($items as $key => $product) {
            Cart::updateOrCreate(
                ['product_id' => $product['product_id'], 'user_id' => Auth::id()],
                ['product_id' => $product['product_id'], 'user_id' => Auth::id(), 'number' => $product['number']]
            );
        }

        session()->flash('message', 'ご注文の確認をお願いいたします。');

        return redirect('/shop/order/kakunin');
    }

    public function kakunin()
    {
        $user_id = Auth::id();
        $orders = Cart::where('user_id', $user_id)->get();

        $total=0;
        foreach ($orders as $order) {
            $total += $order->product->price * $order->number;
        }

        return view('shop.kakunin', compact('orders', 'total'));
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

    public function delivery()
    {
        return view('shop.delivery');
    }

    public function payment()
    {
        return view('shop.payment');
    }

    public function returns()
    {
        return view('shop.returns');
    }

    public function history()
    {
        $user_id = Auth::id();
        $orders = Order::where('user_id', $user_id)->get();
        return view('shop.history', compact('orders'));
    }
}
