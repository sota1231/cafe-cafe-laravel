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
  <script src="https://kit.fontawesome.com/5f1eeb6c2d.js" crossorigin="anonymous"></script>
  <script src="js/index-1.js"></script>
</head>
<body>
    <!--?php require_once('header.php') ?> -->

    <section class="section">
        <div class="contact_box">
            <h2>お問い合わせ</h2>
			<form action="{{route('confirm')}}" method="POST" onsubmit="return subForm()">
                <h3>下記の項目をご記入の上送信ボタンを押してください</h3>
                <p>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
                <p>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>
                <p><span class="required">*</span>は必須項目となります。</p>
                <dl>
                <!-- name -->
                    <dt><label for="name">氏名</label><span class="required">*</span></dt>
        
                        <dd class="error">氏名は必須入力です。10文字以内でご入力ください。</dd>
        
                    <dd><input type="text" name="name" id="name" placeholder="山田太郎" value=""></dd>

                <!-- kana -->
                    <dt><label for="kana">フリガナ</label><span class="required">*</span></dt>
                    
                        <dd class="error">フリナガは必須入力です。10文字以内でご入力ください。</dd>
                    
                    <dd><input type="text" name="kana" id="kana" placeholder="ヤマダタロウ" value=""></dd>
                    

                <!-- tel -->
                    <dt><label for="tel">電話番号</label></dt>
                    
                        <dd class="error">電話番号は0-9の数字のみでご入力ください。</dd>
                
                    <dd><input type="text" name="tel" id="tel" placeholder="09012345678" value=""></dd>
                    
                    
                <!-- email -->
                    <dt><label for="email">メールアドレス</label><span class="required">*</span></dt>
                    <!-- <dd class="error">メールアドレスは正しくご入力ください。</dd> -->
                    
                        <dd class="error">メールアドレスは必須入力です。</dd>
                    
                    
                        <dd class="error">メールアドレスは正しくご入力ください。</dd>
                
                    <dd><input type="text" name="email" id="email" placeholder="test@test.co.jp" value=""></dd>
                    
                </dl>

                <!-- body -->
                <h3><label for="body">お問い合わせ内容をご記入ください<span class="required">*</span></label></h3>
                <dl class="body">
                    <!-- <dd class="error">お問い合わせ内容は必須入力です。</dd> -->
                
                        <dd class="error">お問い合わせ内容は必須入力です。</dd>
                
                    
                    <dd><textarea name="body" id="body"></textarea></dd>
                    <dd><button type="submit">送　信</button></dd>
                </dl>
			</form>
        </div>
    </section>


    <!-- データ一覧 -->
    <div class="db">
        <table>
            <tr>
              <th>id</th>
              <th>名前</th>
              <th>フリガナ</th>
              <th>電話番号</th>
              <th>メールアドレス</th>
              <th>お問い合わせ内容</th>
              <th></th>
              <th></th>
            </tr>
            
            
        </table>
    </div>
    



    <!-- ?php require_once('footer.php') ? -->
</body>