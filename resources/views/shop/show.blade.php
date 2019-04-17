@extends('layouts.layout')
@section('title', '根岸農園(商品一覧)')
@section('content')
<h1>商品一覧</h1>
<div class="row">
<div class="card col-md-3 ">
  <img src="{{ asset('image/nasu.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ナス</h5>
    <p class="card-text">値段: 200円</p>
    <input type="number" name="" value="1"><br>
    <br>
    <a href="#">カートに入れる</a>
  </div>
</div>
<div class="card col-md-3 mx-4">
  <img src="{{ asset('image/kyuri.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">きゅうり</h5>
    <p class="card-text">値段: 250円</p>
    <input type="number" name="" value="1"><br>
    <br>
    <a href="#">カートに入れる</a>
  </div>
</div>
<div class="card col-md-3">
  <img src="{{ asset('image/negi.jpg') }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ねぎ</h5>
    <p class="card-text">値段: 300円</p>
    <input type="number" name="" value="1"><br>
    <br>
    <a href="#">カートに入れる</a>
  </div>
</div>
</div>
@endsection
