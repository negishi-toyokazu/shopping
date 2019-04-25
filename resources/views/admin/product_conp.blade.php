@extends('layouts..admin.layout')
@section('title', '商品追加完了画面')
@section('content')
  <body>
    <div class="container mt-5">
    <h2>商品追加完了しました。</h2>
    <a href="{{route ('add.product')}}">他の商品を追加</a><br><br>
    <a href="{{route ('top')}}">Topへ</a>
  </div>
    {{--<div class="container">
      <div class="card mt-5 p-4">
        <h1 style="text-align: center">商品の確認画面</h1>
        <div class="table-responsive mt-4">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>商品名</th>
                <th>価格</th>
                <th>画像</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>--}}
  </body>
@endsection
