<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <!-- <link rel="stylesheet" type="text/css" href="header.css"> -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!-- <link rel="stylesheet" href="animation.css"> -->
  <!-- <link rel="stylesheet" href="responsive.css"> -->
  <!-- <link rel="stylesheet" href="responsive-iphone.css"> -->
  <!-- <script src="index.js"></script> -->
  <!-- <script src="https://kit.fontawesome.com/5f1eeb6c2d.js" crossorigin="anonymous"></script> -->
  <script src="js/index-1.js"></script>
</head>
<body>
    <!-- header -->

   <header class="header" id="header">
        <div class="header-container">
            <div class="logo">
                <a href="{{ route('top') }}"><img src="./img/logo.png" alt=""></a>
            </div>
            <div class="nav">
                <div class="menu"><a href="#first">はじめに</a></div>
                <div class="menu"><a href="#second">体験</a></div>
                <div class="menu"><a href="{{ route('contact')}}">お問い合わせ</a></div>
            </div>
            <div class="sign" id="sign">
                <div class="signin">サインイン</div>

                <!-- humbergar -->
                <div class="_click humbergar" id="humbergar">
                    <img src="./img/menu.png" alt="スマホメニュー">
                </div>
                <!-- humbergar nav -->
                <div class="sp_nav sp_nav_motion" id="sp_nav_motion">
                    <div class="sp_signin _click signin">サインイン</div>
                    <div class="sp_menu _click"><a href="#first">はじめに</a></div>
                    <div class="sp_menu _click"><a href="#second">体験</a></div>
                    <div class="sp_menu"><a href="{{ route('contact')}}">お問い合わせ</a></div>
                </div>
            </div>
        </div>
    </header>

    <!-- ログインフォーム -->
    <div class="humbergar-menu">
        <div id="overlay" class="overlay">
            <div id="signin_box" class="signin_box"> <!-- style="margin-top: 0px; opacity: 1;" -->
                <h2>ログイン</h2>
                <form action="" method="post">
                <dl>
                    <dd><input type="text" name="name" placeholder="メールアドレス"></dd>
                    <dd><input type="password" name="pass" placeholder="パスワード"></dd>
                    <dd><button type="submit">送　信</button></dd>
                </dl>
                <dl class="sns">
                    <dd><button name="twitter"><img src="./img/twitter.png"></button></dd>
                    <dd><button name="facebook"><img src="./img/fb.png"></button></dd>
                    <dd><button name="google"><img src="./img/google.png"></button></dd>
                    <dd><button name="apple"><img src="./img/apple.png"></button></dd>
                </dl>
                </form>
            </div>
        </div>
	</div>

    <!-- ここだけ変わる -->
    @yield('content')
    

    <footer class="footer">
        <div class="outer">
            <div class="nav_area">
                <div class="inner">
                    <h2>企業情報</h2>
                    <ul>
                        <li><a href="#">ご利用方法</a></li>
                        <li><a href="#">ニュースルーム</a></li>
                        <li><a href="#">株主・投資家のみなさまへ</a></li>
                        <li><a href="#">XXXXXXXXXXXXXXX</a></li>
                        <li><a href="#">XXXXXXXXXXXXXXX</a></li>
                        <li><a href="#">XXXXXXXXXXXXXXX</a></li>
                        <li><a href="#">採用情報</a></li>
                    </ul>
                </div>
                <div class="inner">
                    <h2>コミュニティ</h2>
                    <ul>
                        <li><a href="#">ダイバーシティ</a></li>
                        <li><a href="#">アクセシビリティ対応</a></li>
                        <li><a href="#">お友達を招待</a></li>
                        <li><a href="#">XXXXXXXXXXXXXXX</a></li>
                        <li><a href="#">XXXXXXXXXXXXXXX</a></li>
                    </ul>
                </div>
                <div class="inner">
                    <h2>ホスト</h2>
                    <ul>
                        <li><a href="#">XXXXXXXXXXXXXXX</a></li>
                        <li><a href="#">XXXXXXXXXXXXXXX</a></li>
                        <li><a href="#">XXXXXXXXXXXXXXX</a></li>
                    </ul>
                </div>
                <div class="inner">
                    <h2>サポート</h2>
                    <ul>
                        <li><a href="#">新型コロナウイルスに対する取り組み</a></li>
                        <li><a href="#">ヘルプセンター</a></li>
                        <li><a href="#">キャンセルオプション</a></li>
                        <li><a href="#">コミュニティサポート</a></li>
                        <li><a href="#">信頼＆安全</a></li>
                    </ul>
                </div>
            </div>

            <div class="reserved">
                <p>このサイトの素材は全て著作権フリーのものを使用しています。</p>
                <div class="menu">
                    <span class="_click">プライバシーポリシー</span>
                    <span class="_click">利用規約</span>
                    <span class="_click">サイトマップ</span>
                    <span class="_click">企業情報</span>
                </div>
                <p>© 2021- LiNew, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>
</body>