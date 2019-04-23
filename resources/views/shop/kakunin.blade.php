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
              <li class="list-group-item"><p>{{$order->product->name}} {{$order->product->price}} ✖️ {{$order->number}}</p></li>
              @endforeach
              <li class="list-group-item">
                合計 : {{$total}} 円
              </li>

              <li class="list-group-item">配送料 : </li>
              <li class="list-group-item">ご請求金額 :</li>
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
