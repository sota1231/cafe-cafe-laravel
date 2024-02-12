<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title></title>
  
  <!-- <link rel="stylesheet" type="text/css" href="header.css"> -->
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <!-- <link rel="stylesheet" href="animation.css"> -->
  <!-- <link rel="stylesheet" href="responsive.css"> -->
  <!-- <link rel="stylesheet" href="responsive-iphone.css"> -->
  <link rel="stylesheet" type="text/css" href="css/contact.css">
  <script src="https://kit.fontawesome.com/5f1eeb6c2d.js" crossorigin="anonymous"></script>
  <script src="js/index-1.js"></script>
</head>
<body>
    <!-- ?php require_once('header.php') ?> -->

    <section class="section">
        <div class="contact_box">
            <h2>お問い合わせ</h2>
			<form action="" method="post">
            @csrf
                <p>下記の内容をご確認の上送信ボタンを押してください</p>
                <p>内容を訂正する場合は戻るを押してください。</p>
                <dl class="confirm">
                    <dt>氏名</dt>
                    <dd></dd>
                    <dt>フリガナ</dt>
                    <dd></dd>
                    <dt>電話番号</dt>
                    <dd></dd>
                    <dt>メールアドレス</dt>
                    <dd></dd>
                    <dt>お問い合わせ内容</dt>
                    <dd></dd>
                    <dd class="confirm_btn">
                        <button type="submit">送　信</button>
                        <a href="">戻　る</a>
                    </dd>
                    <!-- <a href="javascript:history.back();"></a> -->
                </dl>
                <!-- <a href="javascript:history.back();"></a> -->
            </form>
        </div>
        <!-- <a href="javascript:history.back();"></a> -->
    </section>
    <!-- <a href="javascript:history.back();"></a> -->



    <!-- ?php require_once('footer.php') ?> -->
</body>