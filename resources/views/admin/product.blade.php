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

        <div class="card bg-light col-md-6 mx-auto px-5 py-3">
          @if(count($errors) > 0)
          <span class="validation">入力に誤りがあります。修正してください。</span>
          @endif
          <form method="post" action="{{ route('create.product') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group col-md-6 p-0">
              <label class="col-form-label">カテゴリ</label>
              <select class="form-control" name="category" value="{{ old('category') }}">
                <option name="category">野菜</option>
                <option name="category">果物</option>
              </select>
              @if($errors->has('category'))
              <span class="validation">{{$errors->first('category')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label class="col-form-label">商品名</label>
              <input type="text" class="form-control" name="name" value="{{ old('name') }}">
              @if($errors->has('name'))
              <span class="validation">{{$errors->first('name')}}</span>
              @endif
            </div>
            <div class="form-group">
              <label class="col-form-label">価格</label>
              <input type="text" class="form-control" name="price" value="{{ old('price') }}">
              @if($errors->has('price'))
              <span class="validation">{{$errors->first('price')}}</span>
              @endif
            </div>
            <div class="form-group mt-2">
              <input type="file" class="form-control-file" name="image" value="{{ old('image') }}">
            </div>
            <div class="form-group mt-2 float-right mr-3">
              <button type="submit" class="btn btn-primary">確認</button>
            </div>
          </form>
        </div>
    </div>
  </body>
</html>
