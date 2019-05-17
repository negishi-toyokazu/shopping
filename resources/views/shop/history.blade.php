@extends('layouts.layout')
@section('title', 'ねぎし農園')
@section('content')
<h2>注文履歴</h2>

<table class="table table-hover table-bordered mt-5 bg-light">
  <thead>
    <tr>
    <th>日時</th>
    <th>商品</th>
    <th>値段</th>
    <th>個数</th>
    <th>合計</th>
  </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
    <td>{{$order->created_at->format('Y-m-d')}}</td>
    <td>{{$order->product->name}}</td>
    <td>{{$order->product->price}}円</td>
    <td>{{$order->number}}</td>
    <td>{{$order->product->price * $order->number}}円</td>
  </tr>
    @endforeach
  </tbody>
</table>
@endsection
