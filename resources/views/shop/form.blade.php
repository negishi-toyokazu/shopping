@extends('layouts.layout')
@section('title', '根岸農園(商品一覧)')
@section('content')
  <h1 style="text-align: center">お問い合わせ</h1>
    <div class="card bg-light col-md-8 mx-auto py-4 px-5 my-4">
      <form class="" action="" >
        <div class="form-group mx-4">
          <label class="col-form-label">お名前</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="form-group row mx-4">
          <label class="col-form-label">メールアドレス</label>
          <input type="text" class="form-control" name="email">
        </div>
        <div class="form-group row mx-4">
          <label class="col-form-label">お問い合わせタイトル</label>
          <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group row mx-4">
          <label class="col-form-label">お問い合わせ内容</label>
          <textarea type="text" class="form-control" name="content"></textarea>
        </div>
        <div class="form-group d-block mx-4 mt-4">
          <button type="submit" class="btn btn-danger btn-block">送信</button>
        </div>
      </form>
    </div>
@endsection
