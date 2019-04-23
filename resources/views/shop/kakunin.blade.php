@extends('layouts.layout')
@section('title', '根岸農園(商品一覧)')
@section('content')
  <h2>注文確認</h2>
    <div class="row">
      <div class="col-md-3">
        <div class="card p-3">
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
                  <label class="form-check-label">クレジットカード決済</label>
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
               <input class="btn btn-primary btn-lg" type="submit" name="" value="注文を確定する">
            </div>
          </div>

        </div>
        <a class="btn btn-outline-primary mx-3" href="{{ route('cart')}}">カートに戻る</a>
      </div>

    </div>
@endsection
