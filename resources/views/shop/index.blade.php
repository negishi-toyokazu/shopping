@extends('layouts.layout')
@section('title', 'ねぎし農園')
@section('content')
@if(Auth::user())
<div class="">
  <h4>ようこそ　{{ Auth::user()->name }}　様</h4>
</div>
@endif
<div class="card bg-dark shadow">
<div id="carouselExampleIndicators" class="carousel slide p-4" data-ride="carousel">
  <!-- インジケータの設定 -->
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <!-- スライドさせる画像の設定 -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('image/top1.jpg') }}" alt="第1スライド" style="height:500px">
    </div><!-- /.carousel-item -->
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('image/top2.jpg') }}" alt="第2スライド" style="height:500px">
    </div><!-- /.carousel-item -->
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('image/top3.jpg') }}" alt="第3スライド" style="height:500px">
    </div><!-- /.carousel-item -->
  </div><!-- /.carousel-inner -->
  <!-- スライドコントロールの設定 -->
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">前へ</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">次へ</span>
  </a>
</div><!-- /スライド画像 -->
</div>

<div class="row my-5 mx-auto">
<div class="col-md-5">
  <div class="card p-3 shadow">
    <div class="card-head">
      <h3>カテゴリから商品を探す</h3>
    </div>
    <div class="card-body">
      <ul class="list-group">
        <li class="list-group-item"><a href="{{ route('list') }}">全ての商品</a></li>
        <li class="list-group-item"><a href="{{ route('yasai') }}">野菜</a></li>
        <li class="list-group-item"><a href="{{ route('fruits') }}">果物</a></li>
      </ul>
    </div>
  </div>
</div>
<div class="col-md-7">
  <div class="card p-3 shadow">
    <div class="card-header">
      <h3>お知らせ</h3>
    </div>
    <div class="card-body">


      <ul class="list-group list-group-flush">
        @foreach($notices as $notice)
        <li class="list-group-item">
          <span class="text-secondary">{{$notice->created_at->format('Y-m-d')}}</span>
          <p class="text-danger mb-0">{{$notice->content}}</p>
        </li>
        @endforeach
      </ul>
      <div class="card-footer mx-auto bg-white">
          {{ $notices->links() }}
      </div>
    </div>
  </div>
</div>
</div>

<div class="col">
  <div class="card p-3 shadow">
    <div class="card-head">
      <h3>おすすめの商品</h3>
    </div>
    <div class="card-body">
      <img src="" alt="">
      <p>商品名:</p>
    </div>
  </div>
</div>

  <div class="col my-5">
    <div class="card p-3 shadow">
      <div class="card-head">
        <h3>ランキング</h3>
        @foreach($ranking as $rank)
        {{ $rank->name }}
        @endforeach
      </div>
      <div class="card-body">
        <img src="" alt="">
        <p>商品名:</p>
      </div>
    </div>
</div>

<div class="col-md-4 mx-auto my-5">
  <div class="card p-3 shadow">
    <div class="card-head">
      <h5 class="text-center">ねぎし農園</h5>
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
    </div>
    <div class="card-body">
      <p></p>
    </div>
  </div>
</div>
@endsection
