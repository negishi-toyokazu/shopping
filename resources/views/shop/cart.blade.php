@extends('layouts.layout')
@section('title', '根岸農園(商品一覧)')
@section('content')
<div class="container">
  <h2 class="my-3"><i class="fas fa-shopping-cart"></i>ショッピングカート</h2>
    <h4>{{ Auth::user()->name }}  様</h4>
    <div class="card my-5 p-4">
      @foreach($cart as $item)
      <form action="{{route('order', [$item->id]) }}" method="post">
        @csrf
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
                <img src="{{ asset('storage/image/' . $item->product->image_path) }}" class="img-thumbnail" style="height: 50px; width: 70px" alt="商品画像">
                <label class="mx-2">{{ $item->product->name }}</label>
              </div>
            </td>

            <td>
              <div class="form-group">
              <input style="width:50px" type="number" name="items[{{ $item->product_id }}][number]" value="{{$item->number}}">個
              <input type="hidden" name="items[{{ $item->product_id }}][product_id]" value="{{$item->product_id}}">
              </div>
            </td>

            <td>{{ $item->product->price }} 円</td>
            <td>{{ $item->product->price * $item->number }} 円</td>

            <td><button type="submit" class="btn btn-danger btn-sm">削除</button></td>

          </tbody>
        </table>
        @endforeach

      <div class="mt-2 ml-auto mb-3 mr-2 row float-right">
        <a class="btn btn-outline-primary mx-3" href="{{ route('list')}}">商品一覧に戻る</a>
        <button type="submit" class="btn btn-success">注文確認画面へ</a>
          </form>

      </div>

    </div>
</div>
@endsection
