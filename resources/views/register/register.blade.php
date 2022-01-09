@extends('layout')
@section('form')

<div class="overlay overlay-bg"></div>
    <div class="container">

        <div class="row justify-content-center text-center">
            <div class="single-contact col-lg-6 col-md-8  mt-60">
                <h2 class="text-white"> Restaurant  Register</h2>
                <p class="text-white">
                    お店側登録
                </p>
                
            </div>
        </div>
        <form name="myForm" action="/register" method="post" class="contact-form"　id="registform">
            {{ csrf_field() }}
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <input name="name" placeholder="お名前" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'お名前'" class="common-input mt-20" type="text" value="{{old('name')}}">
                        @error('name')
                        <p> {{ $errors->first('name') }}</p>
                        @enderror
                </div>
                <div class="col-lg-10">
                    <input name="email" placeholder="メールアドレス" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'メールアドレス'" class="common-input mt-20" type="text" value="{{old('email')}}">
                        @error('email')
                        <p> {{ $errors->first('email') }}</p>
                        @enderror
                </div>
                <div class="col-lg-10">
                    <input name="password" placeholder="パスワード" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'パスワード'" class="common-input mt-20" type="password" >
                        @error('password')
                        <p> {{ $errors->first('password') }}</p>
                        @enderror
                </div>
                <div class="col-lg-10">
                    <input name="password_confirmation" placeholder="パスワード（確認）" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'パスワード（確認）'" class="common-input mt-20" type="password" >
                        @error('password_confirmation')
                        <p> {{ $errors->first('password_confirmation') }}</p>
                        @enderror
                </div>
                <div class="col-lg-10 d-flex justify-content-end">
                    <button class="primary-btn white-bg d-inline-flex align-items-center mt-20"><span
                            class="text-black mr-10">送信</span><span
                            class="text-black lnr lnr-arrow-right"></span></button> <br>
                </div>
                {{-- <div class="alert-msg">
                    @isset($errors)
                        <p style="color:red">{{ $errors->first('message') }}</p>
                    @endisset
                </div> --}}
            </div>
        </form>
    </div>
</div>

{{-- <form name="registform" action="/register" method="post" id="registform">
    {{ csrf_field() }}
    <dl>
        <dt>名前：</dt>
        <dd><input type="text" name="name" size="30">
            <span>{{ $errors->first('name') }}</span></dd>
        <dt>メールアドレス：</dt>
        <dd><input type="text" name="email" size="30">
            <span>{{ $errors->first('email')}}</span></dd>
        <dt>パスワード：</dt>
        <dd><input type="password" name="password" size="30">
            <span>{{ $errors->first('password') }}</span></dd>
        <dt>パスワード（確認）：</dt>
        <dd><input type="password" name="password_confirmation" size="30">
            <span>{{ $errors->first('password_confirmation') }}</span></dd>
    </dl>
    <button type='submit' name='action' value='send'>送信</button>
</form> --}}
@endsection
