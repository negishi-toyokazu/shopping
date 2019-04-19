@extends('layouts.layout')
@section('title', '根岸農園(商品一覧)')
@section('content')
  <h1>商品一覧</h1>

  <div class="row">
    @foreach($products as $product)
    <div class="card col-md-3 mx-3 my-3">
      <div class="card-head p-3">
      <img src="{{ asset('storage/image/' . $product->image_path) }}" class="card-img-top img-thumbnail" style="height: 200px" alt="...">
    </div>
      <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">値段: {{$product->price}}円</p>
        <div class="form-group">
        <input type="number" name="" value="1"><br>
      </div>
        <br>
        <input type="submit" value="カートに入れる" class="btn btn-primary">
      </div>

    </div>
@endforeach
  </div>

@endsection
