@extends('layouts.layout')
@section('title', 'ねぎし農園')
@section('content')
<link href="{{ asset('css/footer.css') }}" rel="stylesheet">
<div class="col-md-6 mx-auto">
  <div class="card bg-light shadow">
    <div class="card-title mx-auto mt-4">
      <h2 class="">配送について</h2>
    </div>
    <div class="card-body mx-4">
      <dl class="border-bottom">
        <dt>配送料に関する情報</dt>
        <dd>通常500円<br>
            3000円以上のご注文で送料無料<br>
        </dd>
      </dl>
      <dl class="border-bottom">
        <dt>所在地</dt>
        <dd>〒123-4567<br>
          群馬県邑楽郡板倉町板倉1234
        </dd>
      </dl>
      <dl class="border-bottom">
        <dt>連絡先</dt>
        <dd>【TEL】0123-45-6789<br>
            【E-mail】negi-nouen@gmail.com<br>
        </dd>
      </dl>
    </div>
  </div>

</div>
@endsection
