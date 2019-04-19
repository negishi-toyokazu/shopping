@extends('layouts.layout')
@section('title', '根岸農園(商品一覧)')
@section('content')
<div class="container">
<h2><i class="fas fa-shopping-cart"></i>ショッピングカート</h2>
<div class="card my-5 p-3">


<table class="table table-hover table-bordered mt-5 bg-light">
  <thead class="bg-secondary">
    <tr style="color: white">
      <th>No</th>
      <th>画像</th>
      <th>商品名</th>
      <th>数量</th>
      <th>金額</th>
      <th>削除</th>
    </tr>
  </thead>
  <tbody>
    <th>1</th>
    <th></th>
    <th>きゅうり</th>
    <th><input style="width:50px" type="number" name="" value="1">個</th>
    <th>500円</th>
    <th><a class="btn btn-danger" href="" role="button">削除</a></th>
  </tbody>
</table>
<div class="mt-2 mr-3 mb-3">
  <form class="float-right" action="index.html" method="post">
  <button type="submit" class="form-group btn-lg btn-primary">レジに進む</button>
  </form>
</div>
</div>
</div>
@endsection
