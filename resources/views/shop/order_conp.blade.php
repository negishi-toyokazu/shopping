@extends('layouts.layout')
@section('title', 'ねぎし農園')
@section('content')
  <div class="col-md-6 mx-auto">
    <div class="card my-5 p-5 shadow">
      <h3 class="mx-auto">注文が完了しました。</h3>
      <a href="{{route('top')}}" class="btn btn-danger mx-auto">トップへ</a>
    </div>
  </div>
@endsection
