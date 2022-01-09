@extends('layout')
@section('content')
    {{-- <p>こんにちは！
@if (Auth::check())
    {{ \Auth::user()->name }}さん</p>
    <p><a href="/logout">ログアウト</a></p>
@else
    ゲストさん</p>
    <p><a href="/login">ログイン</a><br><a href="/register">会員登録</a></p>
@endif --}}

<div class="overlay overlay-bg"></div>
<div class="container">
    <div class="row justify-content-center text-center">
        
        <div class="row justify-content-center">
            <div class="col-lg-10 button-group-area mt-100">
            <div class="single-contact col-lg-6 col-md-8">
                <p class="text-white">メイン画面</p>
            </div>
            </div>
            <div class="col-lg-10 button-group-area">
                <div class="col-lg-10"><a href="/menu_kind/edit" class="genric-btn primary e-large">メニュー種類作成</a></div>
            </div>
            <div class="col-lg-10 button-group-area mt-40">
                <div class="col-lg-10"><a href="menu" class="genric-btn primary e-large">{{'　メニュー作成　';}}</a></div>
            </div>
            <div class="col-lg-10 button-group-area mt-40">
                <div class="col-lg-10"><a href="restaurant" class="genric-btn primary e-large">{{'　お店情報登録　';}}</a></div>
            </div>
            <div class="col-lg-10 button-group-area mt-40">
                <div class="col-lg-10"><a href="qrcode" class="genric-btn primary e-large">{{'　QRコード生成　';}}</a></div>
            </div>
            
        </div>
    </div>
</div>
</div>

@endsection

