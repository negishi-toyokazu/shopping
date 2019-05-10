@extends('layouts..admin.layout')
@section('title', '商品追加画面')
@section('content')
<div class="card bg-light col-md-6 mx-auto px-5 py-3">
  @if(count($errors) > 0)
  <span class="validation">入力に誤りがあります。修正してください。</span>
  @endif
  <form method="post" action="{{ route('add.notice')}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label class="col-form-label">お知らせ</label>
      <textarea type="text" class="form-control" name="content"></textarea>
      @if($errors->has('content'))
      <span class="validation">{{$errors->first('content')}}</span>
      @endif
    </div>
    <div class="form-group mt-2 float-right mr-3">
      <button type="submit" class="btn btn-primary">追加</button>
    </div>
  </form>
</div>
@endsection
