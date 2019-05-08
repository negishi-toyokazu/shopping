@extends('layouts.layout')
@section('title', 'ねぎし農園(商品一覧)')
@section('content')
  <h2>注文確認</h2>
    <div class="row">
      <div class="col-md-3">
        <div class="card p-3 shadow">
          <div class="card-head">
            <p>お届け先住所</p>
          </div>
          <div class="card-body">
            <p>{{ Auth::user()->address }}</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card p-3">
          <div class="card-head">
            <p>お支払い方法の選択</p>
          </div>
          <div class="card-body">
            <ul class="list-group">
              <li class="list-group-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="" value="">
                  <label class="form-check-label">クレジットカード決済</label><br>
                  <div class="row mx-auto">
                    <img src="{{ asset('image/jcb.gif') }}" alt="jcb" style="height:20px; width:20px">
                    <img class="mx-1" src="{{ asset('image/visa.gif') }}" alt="visa" style="height:20px; width:20px">
                    <img src="{{ asset('image/mastercard.gif') }}" alt="mastercard" style="height:20px; width:20px">
                    <img class="mx-1" src="{{ asset('image/american.gif') }}" alt="american" style="height:20px; width:20px">
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="" value="">
                    <label class="form-check-label">代金引換</label>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col-md-5">
        <div class="card p-4 my-3">
          <div class="card-head">
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

            <div class="mt-4 mb-3 float-right">
              <form action="{{route('charge')}}" method="POST">
                @csrf
                @if($total>=3000)
                 <script
                   src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                   data-key="pk_test_LI09hWHzfIcNAke8HTdIuRZH007Qw44Dce"
                   data-amount="{{$total}}"
                   data-name="決済画面"
                   data-label="決済をする"
                   data-description="Widget"
                   data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                   data-locale="auto"
                   data-currency="jpy">
                 </script>
                 @else
                 <script
                   src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                   data-key="pk_test_LI09hWHzfIcNAke8HTdIuRZH007Qw44Dce"
                   data-amount="{{$total+500}}"
                   data-name="決済画面"
                   data-label="決済をする"
                   data-description="Widget"
                   data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                   data-locale="auto"
                   data-currency="jpy">
                 </script>
                 @endif
              </form>
            </div>
          </div>

        </div>
        <a class="btn btn-outline-primary mx-3" href="{{ route('cart')}}">カートに戻る</a>
      </div>

    </div>
@endsection
