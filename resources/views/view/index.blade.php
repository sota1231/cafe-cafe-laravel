<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/base.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!-- <link rel="stylesheet" href="animation.css"> -->
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="stylesheet" href="css/responsive-iphone.css">
  <!-- <link rel="stylesheet" type="text/css" href="css/base.css"> -->
  <script src="https://kit.fontawesome.com/5f1eeb6c2d.js" crossorigin="anonymous"></script>
  <script src="js/index.js"></script>
</head>
<body>
    <div class="alert">
        <div class="sticky">
            <a href="#">新型コロナウイルスに対する取り組みの最新情報をご案内</a>
    
        </div>
    </div>

    
   <!-- header -->

   <header class="header" id="header">
        <div class="header-container">
            <div class="logo">
                <a href="index.php"><img src="./img/logo.png" alt=""></a>
            </div>
            <div class="nav">
                <div class="menu"><a href="#first">はじめに</a></div>
                <div class="menu"><a href="#second">体験</a></div>
                <div class="menu"><a href="{{route('contact')}}">お問い合わせ</a></div>
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
                    <div class="sp_menu"><a href="{{ route('contact') }}">お問い合わせ</a></div>
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


    <!-- top -->
    <div class="top">
        <img src="./img/eyecatch.jpg" alt="">
        <div class="concept">
            <h1>あなたの<br>好きな空間を作る。</h1>
        </div>
    </div>
    
    <!-- 7つ -->
    <section id="first">
        <div class="cafe_intro">
            <div class="box">
                <div class="info">
                    <div class="photo">
                        <img src="./img/cafe1.jpg" alt="">
                    </div>
                    <div class="acces">
                        <p class="area">東京</p>
                        <p class="distance">車で15分</p>
                    </div>
                </div>
            </div>
    <!-- 2 -->
            <div class="box">
                <div class="info">
                    <div class="photo">
                        <img src="./img/cafe2.jpg" alt="">
                    </div>
                    <div class="acces">
                        <p class="area">東京</p>
                        <p class="distance">車で15分</p>
                    </div>
                </div>
            </div>
    <!-- 3 -->
            <div class="box">
                <div class="info">
                    <div class="photo">
                        <img src="./img/cafe3.jpg" alt="">
                    </div>
                    <div class="acces">
                        <p class="area">東京</p>
                        <p class="distance">車で15分</p>
                    </div>
                </div>
            </div>
    <!-- 4 -->
            <div class="box">
                <div class="info">
                    <div class="photo">
                        <img src="./img/cafe4.jpg" alt="">
                    </div>
                    <div class="acces">
                        <p class="area">東京</p>
                        <p class="distance">車で15分</p>
                    </div>
                </div>
            </div>
    <!-- 5 -->
            <div class="box">
                <div class="info">
                    <div class="photo">
                        <img src="./img/cafe5.jpg" alt="">
                    </div>
                    <div class="acces">
                        <p class="area">東京</p>
                        <p class="distance">車で15分</p>
                    </div>
                </div>
            </div>
    <!-- 6 -->
            <div class="box">
                <div class="info">
                    <div class="photo">
                        <img src="./img/cafe6.jpg" alt="">
                    </div>
                    <div class="acces">
                        <p class="area">東京</p>
                        <p class="distance">車で15分</p>
                    </div>
                </div>
            </div>
    <!-- 7 -->
            <div class="box">
                <div class="info">
                    <div class="photo">
                        <img src="./img/cafe7.jpg" alt="">
                    </div>
                    <div class="acces">
                        <p class="area">東京</p>
                        <p class="distance">車で15分</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 好きなロケーション -->
    <section class="bg_white">
        <h2>好きなロケーションを選ぼう</h2>
        <div class="cafe_local">
            <div class="box">
                <div class="info">
                    <div class="photo">
                        <img src="./img/intro1.jpg" alt="">
                    </div>
                    <div class="text">クラシック</div>
                </div>
            </div>
            <!-- 2 -->
            <div class="box">
                <div class="info">
                    <div class="photo">
                        <img src="./img/intro2.jpg" alt="">
                    </div>
                    <div class="text">クラシック</div>
                </div>
            </div>
            <!-- 3 -->
            <div class="box">
                <div class="info">
                    <div class="photo">
                        <img src="./img/intro3.jpg" alt="">
                    </div>
                    <div class="text">クラシック</div>
                </div>
            </div>
            <!-- 4 -->
            <div class="box">
                <div class="info">
                    <div class="photo">
                        <img src="./img/intro4.jpg" alt="">
                    </div>
                    <div class="text">クラシック</div>
                </div>
            </div>
        </div>

    <!-- goto -->
        <div class="goto">
            <div class="goto_text">
                <h3>Go To Eats</h3>
                <p>キャンペーンを利用して、全国で食事しよう。<br>
                    いつもと違う景色に囲まれてカラダもココロもリフレッシュ。
                </p>
            </div>
            <img src="./img/goto.jpg" alt="">
        </div>
    </section>

    <!-- カフェづくりに挑戦しよう -->
    <section class="bg_black" id="second">
        <h2>カフェ作りを体験しよう</h2>
        <p>お店のエキスパートが案内するユニークな体験（直接対面型またはオンライン）。</p>
        <div class="cafe_exp">
                <div class="box">
                    <div class="info">
                        <div class="photo"><img src="./img/exp1.jpg" alt="ジョブ"></div>
                        <div class="text">ジョブ体験</div>
                        <p>カフェカウンターを体験しよう。</p>
                    </div>
                </div>

                <div class="box">
                    <div class="info">
                        <div class="photo"><img src="./img/exp2.jpg" alt="レシピ"></div>
                        <div class="text">レシピ体験</div>
                        <p>美味しいレシピを考えてみよう。</p>
                    </div>
                </div>

                <div class="box">
                    <div class="info">
                        <div class="photo"><img src="./img/exp3.jpg" alt="プロモーション"></div>
                        <div class="text">プロモーション体験</div>
                        <p>お店の宣伝を手伝ってみよう。</p>
                    </div>
                </div>
            </div>
    </section>

    <!-- ホストに仲間入りしよう -->
    <section class="bg_white">
        <h2>全国のホストに仲間入りしよう</h2>
        <div class="cafe_host">
            <div class="box">
                <div class="info">
                    <div class="photo"><img src="./img/host1.jpg" alt="ビジネス"></div>
                    <div class="text">ビジネス</div>
                </div>
            </div>

            <div class="box">
                <div class="info">
                    <div class="photo"><img src="./img/host2.jpg" alt="コミュニティ"></div>
                    <div class="text">コミュニティ</div>
                </div>
            </div>

            <div class="box">
                <div class="info">
                    <div class="photo"><img src="./img/host3.jpg" alt="食べ歩き"></div>
                    <div class="text">食べ歩き</div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
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
<!-- topへ -->
    <div class="jump">Jump To Top</div>
    
    </body>
</html>