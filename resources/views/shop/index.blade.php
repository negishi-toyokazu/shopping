@extends('layouts.layout')
@section('title', '根岸農園')
@section('content')
@if(Auth::user())
<div class="">
  <h4>ようこそ　{{ Auth::user()->name }}　様</h4>
</div>
@endif
<div class="card bg-dark">
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
  <div class="card p-3">
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
  <div class="card p-3">
    <h3>お知らせ</h3>
  </div>
</div>
</div>

<div class="col">
  <div class="card p-3">
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
    <div class="card p-3">
      <div class="card-head">
        <h3>ランキング</h3>
      </div>
      <div class="card-body">
        <img src="" alt="">
        <p>商品名:</p>
      </div>
    </div>
</div>

<div class="col-md-8 mx-auto my-5">
  <div class="card p-3">
    <div class="card-head">
      <h5>ねぎし農園について</h5>
    </div>
    <div class="card-body">
      <p></p>
    </div>
  </div>
</div>
@endsection
