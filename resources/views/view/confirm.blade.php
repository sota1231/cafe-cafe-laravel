@extends('layouts.layout')

@section('content')
    <section class="section">
        <div class="contact_box">
            <h2>お問い合わせ</h2>
			<form action="{{route('complete') }}" method="post">
            @csrf
                <p>下記の内容をご確認の上送信ボタンを押してください</p>
                <p>内容を訂正する場合は戻るを押してください。</p>
                <dl class="confirm">
                    <input type="hidden" name="id" value="{{ $userData['id'] }}">
                    <input type="hidden" name="name" value="{{ $userData['name'] }}">
                    <input type="hidden" name="kana" value="{{ $userData['kana'] }}">
                    <input type="hidden" name="tel" value="{{ $userData['tel'] }}">
                    <input type="hidden" name="email" value="{{ $userData['email'] }}">
                    <input type="hidden" name="body" value="{{ $userData['body'] }}">
                    <dt>氏名</dt>
                    <dd> {{ $userData['name'] }}</dd>
                    <dt>フリガナ</dt>
                    <dd>{{ $userData['kana'] }}</dd>
                    <dt>電話番号</dt>
                    <dd>{{ $userData['tel'] }}</dd>
                    <dt>メールアドレス</dt>
                    <dd>{{ $userData['email'] }}</dd>
                    <dt>お問い合わせ内容</dt>
                    <dd>{!! nl2br (e ( $userData['body'])) !!}</dd>
                    <dd class="confirm_btn">
                        <button type="submit">送　信</button>
                        <a onClick="history.back()">戻　る</a>
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
@endsection