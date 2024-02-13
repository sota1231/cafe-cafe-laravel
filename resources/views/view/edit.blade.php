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
                    @if ($errors->has('email'))
                        <dd class="error">{{ $errors->first('name') }}</dd>
                    @endif
                    <dt><input type="text" name="name" id="name" value="{{ $userData->name }}"></dt>

                <!-- kana -->
                    <dt><label for="kana">フリガナ</label><span class="required">*</span></dt>
                    @if ($errors->has('email'))
                        <dd class="error">{{ $errors->first('kana') }}</dd>
                    @endif
                    <dt><input type="text" name="kana" id="kana"  value="{{ $userData->kana }}"></dt>
                    

                <!-- tel -->
                    <dt><label for="tel">電話番号</label></dt>
                    @if ($errors->has('email'))
                        <dd class="error">{{ $errors->first('tel') }}</dd>
                    @endif
                    <dt><input type="text" name="tel" id="tel" value="{{ $userData->tel }}"></dt>
                    
                    
                <!-- email -->
                    <dt><label for="email">メールアドレス</label><span class="required">*</span></dt>
                    @if ($errors->has('email'))
                        <dd class="error">{{ $errors->first('email') }}</dd>
                    @endif
                    <dt><input type="text" name="email" id="email" value="{{ $userData->email }}"></dt>
                    
                </dl>

                <!-- body -->
                <h3><label for="body">お問い合わせ内容をご記入ください<span class="required">*</span></label></h3>
                <dl class="body">
                    <!@if ($errors->has('email'))
                        <dd class="error">{{ $errors->first('body') }}</dd>
                    @endif
                    <dd><textarea name="body" id="body">{{ $userData->body }}</textarea></dd>
                    <dd class="confirm_btn"><button type="submit">更　新</button></dd>
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