@extends('layouts.layout')
@section('title', 'ねぎし農園')
@section('content')
<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
<div class="col-md-6 mx-auto">
  <div class="card bg-light shadow">
    <div class="card-title mx-auto mt-4">
      <h2 class="">返品について</h2>
    </div>
    <div class="card-body mx-4">
      <dl class="border-bottom">
        <dt class="my-2">返品期限</dt>
        <dd>万一、商品に不備があった場合、違う商品が届いた場合、
            商品到着後5日以内にご連絡いただければ返品、交換いたします。
            お客様のご都合での返品、交換はお受けできませんので予めご了承ください。
        </dd>
      </dl>
      <dl class="border-bottom">
        <dt class="my-2">返品送料</dt>
        <dd>商品に不備があった場合の送料、キャンセル料はいただきません。<br>
            ただし、お客様のご都合により返品される場合の送料はお客様にご負担頂きます。<br>
        </dd>
      </dl>
    </div>
  </div>
</div>
@endsection
