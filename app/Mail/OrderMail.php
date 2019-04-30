<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;//追加
use App\Order;//追加
use Illuminate\Support\Facades\Auth;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;


    public function __construct()
    {

    }

    public function build()
    {
      $user = Auth::user();
      $user_id = Auth::id();
      $orders = Order::where('user_id', $user_id)->get();
      $total = 0;
      foreach ($orders as $order) {
          $total += $order->product->price * $order->number;
      }

        return $this
        ->from('negi-nouen@gmail.com')
        ->subject('【ねぎし農園】注文ありがとうございました')
        ->view('emails.order',compact('user','orders','total'));
    }
}
