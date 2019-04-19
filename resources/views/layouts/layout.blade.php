<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--font--}}
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    {{--郵便番号--}}
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="./font-awesome.css" rel="stylesheet">


    <title>@yield('title')</title>
  </head>

  <body>
    <div class="logo">
  <a href="{{ route('top')}}">
    <img src="{{ asset('image/logo.png') }}" class="mx-auto d-block" width="480" height="180">
  </a>
</div>
    <div id="app">
      {{-- ナビゲーションバー --}}
    <nav class="navbar navbar-expand-sm navbar-dark bg-success mt-3 mb-3">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <a class="navbar-brand" href="{{ route ('top')}}"><i class="fas fa-home fa-lg"></i></a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route ('list')}}">商品一覧</a>
            </li>
            <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">カテゴリ</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">野菜</a>
                <a class="dropdown-item" href="#">果物</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('info')}}">農園情報</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('form')}}">お問い合わせ</a>
            </li>
          </ul>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{route('cart')}}"><i class="fas fa-shopping-cart"></i> カート</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('shop.register')}}">会員登録</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('shop.login')}}">ログイン</a>
            </li>
          </ul>
        </div>
    </nav>
{{-- ここまでナビゲーションバー --}}

            <div class="container">
              <main class="py-4">
                  {{-- コンテンツをここに入れる --}}
                  @yield('content')
              </main>
            </div>
  </body>
</html>
