@extends('layouts.layout')
@section('title', '根岸農園(商品一覧)')
@section('content')
<div class="container">
<h2 class="my-3"><i class="fas fa-shopping-cart"></i>ショッピングカート</h2>
<h4>{{ Auth::user()->name }}  様</h4>
<div class="card my-5 p-4">

@foreach($cart as $item)
<table class="table table-hover table-bordered mt-5 bg-light">
  <thead class="bg-info">
    <tr style="color: white">
      <th>No</th>
      <th>商品名</th>
      <th>数量</th>
      <th>値段</th>
      <th>小計</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <td>No.{{$loop->iteration}}</td>
    <td>
      <div class="row　mx-2">
        <img src="{{ asset('storage/image/' . $item->product->image_path) }}" class="img-thumbnail" style="height: 50px; width: 50px" alt="商品画像">
        <label class="mx-2">{{ $item->product->name }}</label>
      </div>
    </td>
    <td><input style="width:50px" type="number" name="number" value="{{$item->number}}">個</td>
    <td>{{ $item->product->price }} 円</td>
    <td>{{ $item->product->price * $item->number }} 円</td>
    <td><a class="btn btn-danger" href="" role="button">削除</a></td>
  </tbody>
</table>
@endforeach
<div class="mt-2 ml-auto mb-3 mr-2 row float-right">
  <a class="btn btn-outline-primary mx-3" href="{{ route('list')}}">商品一覧に戻る</a>
  <a class="btn btn-success" href="{{ route('kakunin')}}">注文確認画面へ</a>
</div>
</div>
</div>
@endsection
