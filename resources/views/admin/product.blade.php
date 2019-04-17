<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>商品追加画面</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
  </head>
  <body>
<div class="container mt-5">


<h1 style="text-align: center">商品追加</h1>

  <div class="card bg-light col-md-8 mx-auto p-3">

    <form class="" action="" >
  <div class="form-group">
    <label class="col-form-label">商品名</label>
    <input type="text" class="form-control" name="product_name">
  </div>
  <div class="form-group">
    <label class="col-form-label">値段</label>
    <input type="text" class="form-control" name="price">
  </div>
  <div class="custom-file form-group p-4 mt-3">
  <input type="file" class="custom-file-input" id="customFile" lang="ja">
  <label class="custom-file-label" for="customFile">ファイル選択...</label>
</div>
  <div class="form-group mt-4">

  <button type="submit" class="btn btn-primary">追加</button>
</div>
</form>

</div>
</div>
</body>
</html>
