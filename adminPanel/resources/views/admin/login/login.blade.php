<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>管理者ログイン</title>
  <link rel="stylesheet" href="/admin/assets/css/style.css">
  <link rel="stylesheet" href="/admin/assets/css/font-awesome.css">
</head>

<body>
  
  <section class="w3l-contact-1">
    <div class="contacts-9 section-gap">
      <div class="wrapper">
        <h3 class="global-title text-center">管理画面へ</h3>
        <div class="d-grid contact-view">
          <div class="cont-details">
            <div class="cont-top">
              <div class="cont-left text-center">
                <span class="fa fa-phone text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>電話</h6>
                <p><a href="tel:+44 99 555 42">+123 45 67 89</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-envelope-o text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>メール</h6>
                <p><a href="mailto:example@mail.com" class="mail">example@mail.com</a></p>
              </div>
            </div>
            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <span class="fa fa-map-marker text-primary"></span>
              </div>
              <div class="cont-right">
                <h6>場所</h6>
                <p>日本</p>
              </div>
            </div>
          </div>
          <div class="map-content-9">
            <form action="{{route('admin.login')}}" method="post">

            @csrf
            <!-- エラー情報の表示を入れる -->
            @include('admin.common.validate')
            <!-- ログアウト成功のメッセージを表示 -->
            @include('admin.common.msg')              
             
              <div class="twice">
                <input id="" name="username" type="text" placeholder="ユーザー名" class="input-text size-L" value="坂本 学">
              </div>
              <div class="twice">
                <input id="" name="password" type="password" placeholder="パスワード" class="input-text size-L" value="12345678">
              </div>
             
              <button type="submit" class="btn btn-contact">ログイン</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /contact1 -->
</body>

</html>