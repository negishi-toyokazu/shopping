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

    {{--ファビコン--}}
    <link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="./font-awesome.css" rel="stylesheet">


    <title>@yield('title')</title>
  </head>

  <body>
    <div class="logo">
  <a href="{{ route('top')}}">
    <img src="{{ asset('image/logo.png') }}" class="mx-auto d-block" width="480" height="298">
  </a>
</div>

    <div id="app">
      {{-- ナビゲーションバー --}}
    <nav class="navbar navbar-expand-sm navbar-dark mt-3 mb-3" style="background-color: #7D2D3F">
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
                <a class="dropdown-item" href="{{ route('yasai') }}">野菜</a>
                <a class="dropdown-item" href="{{ route('fruits') }}">果物</a>
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
            {{-- ログインしていなかったらログイン画面へのリンクを表示 --}}
            @guest
              <li class="nav-item">
                <a class="nav-link" href="{{route('shop.register')}}">会員登録</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('shop.login')}}">ログイン</a>
              </li>
            {{-- ログインしていたらユーザー名とログアウトボタンを表示 --}}
              @else
              <li class="nav-item">
                <a href="{{route('order.history')}}" class="nav-link">注文履歴</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('cart')}}"><i class="fas fa-shopping-cart"></i> カート</a>
              </li>

                <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('ログアウト') }}
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>　
              </div>
              </li>
              @endguest
          </ul>
        </div>
    </nav>
{{-- ここまでナビゲーションバー --}}


            <div class="container">
              <main class="py-4">
                  {{-- フラッシュメッセージの表示 --}}
                    @if (session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif
                  {{--コンテンツ--}}
                    @yield('content')
              </main>
              <!-- Social buttons -->
                <ul class="list-unstyled list-inline text-center">
                  <li class="list-inline-item">
                    <a class="btn-floating btn-fb mx-1 inline-text" href="https://www.facebook.com/sharer/sharer.php?u=https://www.google.com/" target="_blank">
                      <span style="font-size: 35px; color: #3b5998;">
                      <i class="fab fa-facebook"></i>
                    </span>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="btn-floating btn-tw mx-1 inline-text" href="http://twitter.com/share?url=https://www.google.com/" target="_blank">
                      <span style="font-size: 35px; color: #55ACEE;">
                      <i class="fab fa-twitter-square"></i>
                    </span>
                    </a>
                  </li>
                </ul>
                <!-- Social buttons -->
              </div>
              <!-- Footer -->
<footer class="page-footer font-small indigo py-3" style="background-color: #7D2D3F">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item"><a href="{{ route('shop.delivery') }}" class="inline-text">配送について</li>
        <li class="list-inline-item"><a href="{{ route('shop.payment') }}" class="inline-text">支払いについて</li>
        <li class="list-inline-item"><a href="{{ route('shop.returns') }}" class="inline-text">返品について</li>
      </ul>


    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Negishi Nouen:
      <a href=""></a>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->
  </body>
</html>
