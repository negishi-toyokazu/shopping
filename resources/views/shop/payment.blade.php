@extends('layouts.layout')
@section('title', 'ねぎし農園')
@section('content')
<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
<div class="col-md-6 mx-auto">
  <div class="card bg-light shadow">
    <div class="card-title mx-auto mt-4">
      <h2 class="">支払いについて</h2>
    </div>
    <div class="card-body mx-4">
      <dl class="border-bottom">
        <dt class="my-2">お支払い方法</dt>
        <dd>
          <li>クレジットカード決済</li>
          <li>代金引換</li>
        </dd>
      </dl>
      <dl class="border-bottom">
        <dt class="mb-2">
          代金引換をご希望のお客様
        </dt>
        <dd>
          商品到着時に現金にてお支払いください。
          お支払い金額は、商品代金（消費税含む）+送料+代引き手数料です。
          代引手数料は、全国一律390円です。
        </dd>
      </dl>
      <dl>
        <dt class="mb-2">
          クレジットカード決済
        </dt>
        <dd>
          ご注文完了後、カード決済画面へ移動いたします。
          決済画面へ移動後、クレジットカードにて決済を行ってください。
        </dd>
      </dl>
    </div>
  </div>
</div>
@endsection
