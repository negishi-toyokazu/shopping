@extends('layouts.layout')
@section('title', 'ねぎし農園')
@section('content')
<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
<div class="col-md-8 mx-auto">
  <div class="card bg-light shadow">
    <div class="card-title mx-auto mt-4">
      <h2 class="">農園情報</h2>
    </div>
    <div class="card-body mx-4">
      <dl class="border-bottom">
        <dt>名称</dt>
        <dd>ねぎし農園</dd>
      </dl>
      <dl class="border-bottom">
        <dt>連絡先</dt>
        <dd>【TEL】0123-45-6789<br>
            【E-mail】negi-nouen@gmail.com<br>
        </dd>
      </dl>
      <dl class="border-bottom">
        <dt>所在地</dt>
        <dd>〒123-4567<br>
          群馬県邑楽郡板倉町板倉1234
          <div class="card mx-auto my-3 shadow p-3 bg-success">
          <img src="{{ asset('image/map.png') }}" class="" style="height: 400px" alt="...">
        </div>
        </dd>
      </dl>
    </div>
  </div>
</div>
@endsection
