@extends('layouts.layout')
@section('title', 'ねぎし農園(商品一覧)')
@section('content')
  <h1 style="text-align: center">お問い合わせ</h1>
    <div class="card bg-light col-md-8 mx-auto pt-4 px-5 my-4">
      <form class="" action="" >
        <div class="form-group col-md-8">
          <label class="col-form-label">お名前</label>
          @if (Auth::check())
          <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}" placeholder="お名前" required>
          @else
          <input type="text" class="form-control" name="name" value="" placeholder="お名前" required>
          @endif
        </div>
        <div class="form-group col-md-8">
          <label class="col-form-label">メールアドレス</label>
          @if (Auth::check())
          <input type="text" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="メールアドレス">
          @else
          <input type="text" class="form-control" name="email" value="" placeholder="メールアドレス">
          @endif
        </div>
        <div class="form-group col-md-8">
          <label class="col-form-label">お問い合わせタイトル</label>
          <input type="text" class="form-control" name="title" placeholder="タイトル">
        </div>
        <div class="form-group col">
          <label class="col-form-label">お問い合わせ内容</label>
          <textarea type="text" class="form-control" name="content" rows="5" placeholder="お問い合わせ内容"></textarea>
        </div>
        <div class="form-group d-block mx-auto my-4 col-md-8">
          <button type="submit" class="btn btn-danger btn-block">送信</button>
        </div>
      </form>
    </div>
@endsection
