@extends('layouts..admin.layout')
@section('title', 'スタッフトップ画面')
@section('content')
  <body>

    <h3>スタッフトップ画面</h3>
    <div class="mb-4">
    <a href="{{ route('add.product' )}}" class="btn btn-primary">商品の追加をする</a>
    <a href="{{ route('user.export')}}" class="btn btn-danger">ユーザーテーブルダウンロード</a>
    <a href="{{ route('order.export')}}" class="btn btn-success">注文テーブルダウンロード</a>
    <a href="{{ route('notice') }}" class="btn btn-warning">お知らせを追加する</a>
    </div>
    <div class="">
      <a href="{{ route('top')}}" class="btn btn-light">トップ画面へ</a>
    </div>
  </body>
@endsection
