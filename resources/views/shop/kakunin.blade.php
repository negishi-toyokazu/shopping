@extends('layouts.layout')
@section('title', 'ねぎし農園(商品一覧)')
@section('content')
  <h2 class="mb-4">注文確認</h2>
    <div class="row">
      <div class="col-md-6">
        <div class="card shadow">
          <div class="card-header">
            <p class="my-2">お届け先住所</p>
          </div>
          <div class="card-body">
            <p>{{ Auth::user()->address }}</p>
          </div>
        </div>
      </div>

      <div class="col-md-5">
        <div class="card shadow">
          <div class="card-header">
            <p>注文の詳細</p>
          </div>

          <div class="card-body">
            <ul class="list-group list-group-flush">
              @foreach($orders as $order)
              <li class="list-group-item">
                <div class="row">
                  <div class="col-md-4">
                    {{$order->product->name}}
                  </div>
                  <div class="col-md-4">
                    {{$order->product->price}}円✖️{{$order->number}}
                  </div>
                  <div class="col-md-4">
                     {{$order->product->price*$order->number}}円
                  </div>
                </div>          　　　
              </li>
              @endforeach
                <li class="list-group-item">
                  <p class="text-right">合計 : {{$total}} 円</p>
                </li>
                @if($total >= 3000)
                <li class="list-group-item"><p class="text-right">配送料 : 無料</p></li>
                <li class="list-group-item"><p class="text-right">ご請求金額 : {{$total}} 円</p></li>
                @else
                <li class="list-group-item"><p class="text-right">配送料 : 500円</p></li>
                <li class="list-group-item"><p class="text-right">ご請求金額 :　{{$total+500}} 円</p></li>
                @endif
              </ul>

            <div class="mt-4 mb-3 mx-auto">
              <form action="{{route('charge')}}" method="POST">
                @csrf
                @if($total>=3000)
                <div class="credit-btn mb-3">
                 <script
                   src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                   data-key="pk_test_LI09hWHzfIcNAke8HTdIuRZH007Qw44Dce"
                   data-amount="{{$total}}"
                   data-name="クレジットカード決済画面"
                   data-label="クレジットカード決済で注文する"
                   data-description="Widget"
                   data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                   data-locale="auto"
                   data-currency="jpy">
                 </script>
                 </div>
                 <div class="daikin-btn">
                   <a href="#" class="btn btn-success">代金引換で注文する</a>
                 </div>
               </div>
                 @else
                 <div class="credit-btn mb-3">
                 <script
                   src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                   data-key="pk_test_LI09hWHzfIcNAke8HTdIuRZH007Qw44Dce"
                   data-amount="{{$total+500}}"
                   data-name="クレジットカード決済画面"
                   data-label="クレジットカードで注文する"
                   data-description="Widget"
                   data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                   data-locale="auto"
                   data-currency="jpy">
                 </script>
                 </div>
                 <div class="daikin-btn">
                   <a href="{{route('daikin')}}" class="btn btn-success">代金引換で注文する</a>
                 </div>
                 </div>
                 @endif
              </form>
            </div>
            <div class="card-footer bg-white">
            <a class="btn btn-outline-danger" href="{{ route('cart')}}">カートに戻る</a>
            </div>
          </div>
        </div>

      </div>

    </div>
@endsection
