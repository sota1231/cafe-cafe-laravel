@extends('layouts.layout')

@section('content')
    <section class="section">
        <div class="contact_box">
            <h2>お問い合わせ</h2>
			<form action="{{route('confirm')}}" method="POST" onsubmit="return subForm()">
            @csrf
                <h3>下記の項目をご記入の上送信ボタンを押してください</h3>
                <p>送信頂いた件につきましては、当社より折り返しご連絡を差し上げます。</p>
                <p>なお、ご連絡までに、お時間を頂く場合もございますので予めご了承ください。</p>
                <p><span class="required">*</span>は必須項目となります。</p>
                <dl>
                <!-- name -->
                    <dt><label for="name">氏名</label><span class="required">*</span></dt>
                    @if ($errors->has('name'))
                        <dd class="error">{{ $errors->first('name') }}</dd>
                    @endif
                    <dd><input type="text" name="name" id="name" placeholder="山田太郎" value="{{ old('name')}}"></dd>

                <!-- kana -->
                    <dt><label for="kana">フリガナ</label><span class="required">*</span></dt>
                    @if ($errors->has('kana'))
                        <dd class="error">{{ $errors->first('kana') }}</dd>
                    @endif
                    <dd><input type="text" name="kana" id="kana" placeholder="ヤマダタロウ" value="{{ old('kana')}}"></dd>
                    

                <!-- tel -->
                    <dt><label for="tel">電話番号</label></dt>
                    @if ($errors->has('tel'))
                        <dd class="error">{{ $errors->first('tel') }}</dd>
                    @endif
                    <dd><input type="text" name="tel" id="tel" placeholder="09012345678" value="{{ old('tel')}}"></dd>
                    
                    
                <!-- email -->
                    <dt><label for="email">メールアドレス</label><span class="required">*</span></dt>
                    @if ($errors->has('email'))
                        <dd class="error">{{ $errors->first('email') }}</dd>
                    @endif
                    <dd><input type="text" name="email" id="email" placeholder="test@test.co.jp" value="{{ old('email')}}"></dd>
                    
                </dl>

                <!-- body -->
                <h3><label for="body">お問い合わせ内容をご記入ください<span class="required">*</span></label></h3>
                <dl class="body">
                @if ($errors->has('name'))
                    <dd class="error">{{ $errors->first('body') }}</dd>
                @endif    
                    <dd><textarea name="body" id="body">{{ old('body')}}</textarea></dd>
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
            
            @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name}}</td>
                        <td>{{ $contact->kana }}</td>
                        <td>{{ $contact->tel}}</td>
                        <td>{{ $contact->email}}</td>
                        <td>{!! nl2br (e ($contact->body) ) !!}</td>
                        <td><a href="{{ route('edit',['id'=>$contact->id]) }}">編集</a></td>
                        <td><a href="{{ route('destory',['id'=>$contact->id]) }}" onclick="return checkDelete()">削除</a></td>
                    </tr>
            @endforeach
            
        </table>
    </div>
    



@endsection