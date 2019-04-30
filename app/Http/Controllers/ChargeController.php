<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;
use App\Order;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ChargeController extends Controller
{

    public function charge(Request $request)
    {
        $user_id = Auth::id();
        $user = Auth::user();
        $orders = Order::where('user_id', $user_id)->get();
        $total = 0;
        foreach ($orders as $order) {
            $total += $order->product->price * $order->number;
        }

        try {
            if ($total>=3000) {
                Stripe::setApiKey("sk_test_U4jTkceXK5FQVJo08pI5VEw800DmWU16g5");
                $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));
                $charge = Charge::create(array(
                  'customer' => $customer->id,
                    'amount' => $total,
                    'currency' => 'jpy',
                    ));
            } else {
                Stripe::setApiKey("sk_test_U4jTkceXK5FQVJo08pI5VEw800DmWU16g5");
                $customer = Customer::create(array(
                      'email' => $request->stripeEmail,
                      'source' => $request->stripeToken
                  ));
                $charge = Charge::create(array(
                        'customer' => $customer->id,
                          'amount' => $total+500,
                          'currency' => 'jpy',
                          ));
            }
            Mail::to($user)->send(new OrderMail());

            return redirect()->route('order.conp');
        } catch (\Exception $ex) {
            return $ex->getMessage();
        }
    }

    public function orderConp()
    {
        return view('shop.order_conp');
    }
}
