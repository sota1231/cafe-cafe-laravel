@extends('layouts.layout')

@section('content')
    <section class="section">
        <div class="contact_box">
            <h2>編集画面</h2>
			<form action="{{ route('edit') }}" method="POST" onsubmit="return subForm()">
            @csrf
                <h3>下記の項目をご記入の上送信ボタンを押してください</h3>
                <p>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
                <p>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>
                <p><span class="required">*</span>は必須項目となります。</p>
                <dl>
                <input type="hidden" name="id" value="{{ $userData->id }}">
                <!-- name -->
                    <dt><label for="name">氏名</label><span class="required">*</span></dt>
                    
                        <dd class="error">氏名は必須入力です。10文字以内でご入力ください。</dd>
                    
                    <dd><input type="text" name="name" id="name" value="{{ $userData->name }}"></dd>

                <!-- kana -->
                    <dt><label for="kana">フリガナ</label><span class="required">*</span></dt>
            
                        <dd class="error">フリナガは必須入力です。10文字以内でご入力ください。</dd>
    
                    <dd><input type="text" name="kana" id="kana"  value="{{ $userData->kana }}"></dd>
                    

                <!-- tel -->
                    <dt><label for="tel">電話番号</label></dt>
                    
                        <dd class="error">電話番号は0-9の数字のみでご入力ください。</dd>
        
                    <dd><input type="text" name="tel" id="tel" value="{{ $userData->tel }}"></dd>
                    
                    
                <!-- email -->
                    <dt><label for="email">メールアドレス</label><span class="required">*</span></dt>
                    <!-- <dd class="error">メールアドレスは正しくご入力ください。</dd> -->
                    
                        <dd class="error">メールアドレスは必須入力です。</dd>
                    
                        <dd class="error">メールアドレスは正しくご入力ください。</dd>

                    <dd><input type="text" name="email" id="email" value="{{ $userData->email }}"></dd>
                    
                </dl>

                <!-- body -->
                <h3><label for="body">お問い合わせ内容をご記入ください<span class="required">*</span></label></h3>
                <dl class="body">
                    <!-- <dd class="error">お問い合わせ内容は必須入力です。</dd> -->
                    
                        <dd class="error">お問い合わせ内容は必須入力です。</dd>
                    
                    
                    <dd><textarea name="body" id="body">{{ $userData->body }}</textarea></dd>
                    <dd><button type="submit">更　新</button></dd>
                </dl>
			</form>
        </div>
    </section>
@endsection


    <!-- データ一覧 -->
    <!-- <div class="db">
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
            ?php
                foreach($result as $r){
                    echo '<tr>';
                    echo '<td>'.$r['id'].'</td>';
                    echo '<td>'.$r['name'].'</td>';
                    echo '<td>'.$r['kana'].'</td>';
                    echo '<td>'.$r['tel'].'</td>';
                    echo '<td>'.$r['email'].'</td>';
                    echo '<td>'.$r['body'].'</td>';
                    echo '<td><a>編集</a></td>';
                    echo '<td><a>削除</a></td>';
                    echo '</tr>';
                }
            ?>
        </table>
    </div> -->