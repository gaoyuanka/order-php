@extends('layout')
@section('form')

<div class="overlay overlay-bg"></div>
    <div class="container">

        <div class="row justify-content-center text-center">
            <div class="single-contact col-lg-6 col-md-8 mt-60">
                <h2 class="text-white"> Restaurant Login</h2>
                <p class="text-white">
                    お店側ログイン
                </p>
                
            </div>
        </div>
        <form name="myForm" action="/login" method="post" class="contact-form">
            {{ csrf_field() }}
            {{-- <dl>
                <dt>メールアドレス：</dt><dd><input type="text" name="email" size="30" value="{{ old('email') }}"></dd>
                <dt>パスワード：</dt><dd><input type="password" name="password" size="30"></dd>
            </dl> --}}
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <input name="email" placeholder="メールアドレス" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'メールアドレス'" class="common-input mt-20" type="text" value="{{old('email')}}">
                </div>
                <div class="col-lg-10">
                    <input name="password" placeholder="パスワード" onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'パスワード'" class="common-input mt-20" type="password" >
                </div>
                <div class="col-lg-10 d-flex justify-content-end">
                    <button class="primary-btn white-bg d-inline-flex align-items-center mt-20"><span
                            class="text-black mr-10">ログイン</span><span
                            class="text-black lnr lnr-arrow-right"></span></button> <br>
                </div>
                <div class="alert-msg">
                    @isset($errors)
                        <p style="color:red">{{ $errors->first('message') }}</p>
                    @endisset
                </div>
            </div>
            {{-- <button type='submit' name='action' value='send'>ログイン</button> --}}

        </form>
    </div>
</div>

@endsection
