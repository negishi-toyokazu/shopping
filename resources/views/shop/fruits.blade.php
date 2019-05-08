@extends('layouts.layout')
@section('title', 'ねぎし農園(商品一覧)')
@section('content')
  <h1>果物の商品一覧</h1>

  <div class="row">
    @foreach($fruits as $product)
    <div class="card col-md-3 mx-3 my-3 shadow">
      <div class="card-head p-3">
      <img src="{{ asset('storage/image/' . $product->image_path) }}" class="card-img-top img-thumbnail" style="height: 200px" alt="...">
    </div>
      <div class="card-body">
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">値段: {{$product->price}}円</p>

        <form action="{{ route('add.cart', [$product->id]) }}" method="post">
          @csrf
        <div class="form-group">
        <input type="number" class="form-control" name="number" value="1"><br>
      </div>
      <div class="form-group">
        <input type="hidden" class="form-control" name="product_id" value="{{$product->id}}">
      </div>
        <button type="submit" class="btn btn-danger">カートに入れる</button>

      </form>
</div>
    </div>
@endforeach
  </div>

@endsection
