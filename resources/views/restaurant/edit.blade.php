@extends('layout')
@section('content')
<div class="container">

<div class="section-top-border">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="POST" action="/restaurant">
        @csrf
        @method('put')
        <div class="progress-table-wrap">
        
            <div class="progress-table">
                
                <div class="progress-table-background">
                <div class="table-row">
                    <div class="serial">店舗名 </div>
                    <div class="mt-10">
                        {{-- <input type="text" id="name" name= "name" max="12" value="{{$restaurant->name}}" required>  --}}
                        <input type="text" name="name" placeholder="店舗名(必須)" value="{{$restaurant->name}}"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = '店舗名(必須)'" required class="single-input">
                    </div>
                    @error('name')
                        <p>
                            {{ $errors->first('name') }}
                        </p>
                        @enderror
                </div>
                <div class="table-row">
                    <div class="serial">ふりがな</div>
                    <div class="mt-10">
                        <input type="text" name="furi_name" placeholder="ふりがな(必須)" value="{{$restaurant->furi_name}}"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'ふりがな(必須)'" required class="single-input">
                        {{-- <input type="text" id="name" name= "name" max="12"  value="{{$restaurant->furi_name}}" required> --}}
                    </div>
                </div>
                <div class="table-row">
                    <div class="serial">郵便番号</div>
                    <div class="mt-10">
                        <input type="text" name="post" maxlength= "7" minlength= "7" placeholder="郵便番号(必須)" value="{{$restaurant->post}}"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = '郵便番号(必須)'" required class="single-input">
                        {{-- <input type="text" value="{{$restaurant->post}}" required> --}}
                    </div>
                </div>
                <div class="table-row">
                    <div class="serial">店舗場所</div>
                    <div class="mt-10">
                        <input type="text" name="address" placeholder="店舗場所(必須)" value="{{$restaurant->address}}" 
                        onfocus="this.placeholder = ''" onblur="this.placeholder = '店舗場所(必須)'" required class="single-input">
                        {{-- <input type="text" value="{{$restaurant->address}}" required> --}}
                    </div>
                </div>
                <div class="table-row">
                    <div class="serial">店舗種類</div>
                    {{-- <div class="mt-10">
                        <input type="text" value="{{$restaurant->rest_type}}" required></div>
                </div> --}}
                    <div class="form-select">
                        <select name="rest_kind">
                            @foreach (config('const.rest_kind') as $rest_kind_key => $rest_kind)
                                @if ($rest_kind_key == $restaurant->rest_kind)
                                    <option value={{$rest_kind_key}} selected>{{$rest_kind}}</option>
                                @else
                                    <option value={{$rest_kind_key}}>{{$rest_kind}}</option>
                                @endif
                                    
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="table-row">
                    <div class="serial">営業時間(開始)</div>
                    <div class="mt-10">
                        <input type="time" name="open_time" placeholder="営業時間(開始)" value="{{$restaurant->open_time}}" 
                        onfocus="this.placeholder = ''" onblur="this.placeholder = '営業時間(開始)'" required class="single-input">
                        {{-- <input type="time" value="{{$restaurant->open_time}}" required> --}}
                    </div>
                </div>
                <div class="table-row">
                    <div class="serial">営業時間(終了)</div>
                    <div class="mt-10">
                        <input type="time" name="close_time" placeholder="営業時間(終了)" value="{{$restaurant->close_time}}" 
                        onfocus="this.placeholder = ''" onblur="this.placeholder = '営業時間(終了)'" required class="single-input">
                        
                        {{-- <input type="time" value="{{$restaurant->close_time}}" required>--}}
                    </div> 
                </div>
                <div class="table-row">
                    <div class="serial">店舗リンク</div>
                    <div class="mt-10">
                        <input type="text" name="link" placeholder="店舗リンク" value="{{$restaurant->link}}" 
                        onfocus="this.placeholder = ''" onblur="this.placeholder = '店舗リンク'" class="single-input">
                        {{-- <input type="text" value="{{$restaurant->link}}"> --}}
                    </div>
                </div>
                <div class="table-row">
                    <div class="serial">店舗紹介</div>
                    <div class="info">
                        <textarea class="single-textarea" name="info" placeholder="Message" onfocus="this.placeholder = ''" 
                            onblur="this.placeholder = '店舗紹介'">
                            {{$restaurant->info}}
                        </textarea>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-10 d-flex justify-content-end">
            <button class="primary-btn white-bg d-inline-flex align-items-center mt-20"><span
                    class="text-black mr-10">更新</span><span
                    class="text-black lnr lnr-arrow-right"></span></button> <br>
        </div>
    </form>
</div>
</div>
@endsection
