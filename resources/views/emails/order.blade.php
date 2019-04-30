<p>
  {{ $user->name }} 様<br>
  ご注文ありがとうございます!
</p>
<p>
注文内容は以下の通りです <br>
--------------------------------------<br>
@foreach($orders as $order)

      {{$order->product->name}} <br>

      {{$order->product->price}}円×{{$order->number}}   {{$order->product->price*$order->number}}円 <br><br>

@endforeach

合計<br>
 {{$total}} 円<br>
</p>
