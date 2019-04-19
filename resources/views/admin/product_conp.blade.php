<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>商品追加完了</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <h2>商品追加完了しました。</h2>
    <a href="{{route ('add.product')}}">他の商品を追加</a>
    <a href="{{route ('top')}}">Topへ</a>

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
</html>
