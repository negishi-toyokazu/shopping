@extends('layouts.layout')
@section('title', 'ねぎし農園')
@section('content')
<div class="row justify-content-md-center">
   <div class="col-md-5">
     <div class="card">
       <div class="card-head bg-warning p-3">
         <h3 class=""><i class="fas fa-key"></i>  ログイン</h3>
       </div>

       <div class="card-body bg-light py-3 px-5">
         <form class="form-horizontal" method="post" action="{{ route('login') }}" enctype="multipart/form-data">
           @csrf

             <div class="form-group">
               <p　class="font-weight-bold">メールアドレス</p>
                 <input id="email"　type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="メールアドレス"　required autofocus>
                   @if ($errors->has('email'))
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('email') }}</strong>
                     </span>
                   @endif
             </div>

             <div class="form-group">
               <p class="font-weight-bold">パスワード</p>
                 <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="パスワード">
                   @if ($errors->has('password'))
                     <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('password') }}</strong>
                     </span>
                   @endif
             </div>

             <div class="form-group row">
               <div class="col-md-6 offset-md-4">
                 <div class="form-check">
                   <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                   <p class="form-check-label" for="remember">パスワードを保存</p>
                 </div>
               </div>
             </div>


             <button type="submit" class="btn btn-warning btn-lg btn-block active mb-3 mt-4">
               ログインする
             </button>
               @if (Route::has('password.request'))
                 <a class="btn btn-link" href="">
                   パスワードを忘れましたか?
                 </a>
               @endif
         </form>
       </div>
     </div>
   </div>
 </div>
@endsection
