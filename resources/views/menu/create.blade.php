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
    <form method="POST" action="/menu/store">
        @csrf
        @method('put')
        <div class="progress-table-wrap">
        
            <div class="progress-table">
                <div class="progress-table-background">
                <div class="table-row">
                    <div class="serial">料理名 </div>
                    <div class="mt-10">
                        <input type="text" name="name" placeholder="料理名(必須)" value="{{ old('name') }}"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = '料理名(必須)'" required class="single-input">
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
                        <input type="text" name="furi_name" placeholder="ふりがな(必須)" value="{{ old('furi_name') }}"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'ふりがな(必須)'" required class="single-input">
                    </div>
                </div>
                <div class="table-row">
                    <div class="serial">値段</div>
                    <div class="mt-10">
                        <input type="text" name="price" placeholder="値段(必須)" value="{{old('price') }}"
                        onfocus="this.placeholder = ''" onblur="this.placeholder = '値段(必須)'" required class="single-input">
                    </div>
                </div>
                
                <div class="table-row">
                    <div class="serial">種類</div>
                   
                    <div class="form-select">
                        <select name="rest_menu_kind_id">
                            @if (old('rest_menu_kind_id') == 0)
                                <option value="0" selected>{{config('const.menu_kind')[0]}}</option>
                            @else
                                <option value="0" >{{config('const.menu_kind')[0]}}</option>
                            @endif
                            @foreach ($menu_kinds as $menu_kind_key => $menu_kind)
                                @if ($menu_kind_key == old('rest_menu_kind_id'))
                                    <option value={{$menu_kind->kind_id}} selected>{{config('const.menu_kind')[$menu_kind->kind_id]}}</option>
                                @else
                                    <option value={{$menu_kind->kind_id}}>{{config('const.menu_kind')[$menu_kind->kind_id]}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="table-row">
                    <div class="serial">ランチ<br/>（8時~17時）</div>
                    <div class="mt-10">
                        {{-- <input type="text" name="link" placeholder="ランチ" value="{{ old('name') }}" 
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'ランチ'" required class="single-input"> --}}
                        <div class="single-element-widget">
                            <div class="switch-wrap d-flex justify-content-between">
                                <div class="primary-switch">
                                    <input type="checkbox" name="is_lunch"  id="is_lunch" checked>
                                    <label for="is_lunch"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-row">
                    <div class="serial">ディナー<br/>（17時以降）</div>
                    <div class="mt-10">
                        {{-- <input type="text" name="link" placeholder="店舗リンク" value="{{ old('name') }}" 
                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'ディナー'" required class="single-input"> --}}
                        <div class="single-element-widget">
                            <div class="switch-wrap d-flex justify-content-between">
                                <div class="primary-switch">
                                    <input type="checkbox" name="is_dinner"  id="is_dinner" checked>
                                    <label for="is_dinner"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-row">
                    <div class="serial">料理紹介</div>
                    <div class="info">
                        <textarea class="single-textarea" name="info" placeholder="料理紹介" onfocus="this.placeholder = ''" 
                            onblur="this.placeholder = '料理紹介'"></textarea>
                    </div>
                </div>

                <div class="table-row">
                    <div class="col-lg-5 d-flex ">
                        <a href="/menu" class="primary-btn  green-bg d-inline-flex align-items-center mt-20" name="action" value="back"><span
                                class="text-black mr-10">戻る</span><span
                                class="text-black lnr lnr-arrow-left"></span></a> <br>
                    </div>
                    <div class="col-lg-5 d-flex justify-content-end">
                        <button class="primary-btn green-bg d-inline-flex align-items-center mt-20" name="action" value="store"><span
                                class="text-black mr-10">追加</span><span
                                class="text-black lnr lnr-arrow-right" ></span></button> <br>
                    </div>
                </div>
                </div>
            </div>
        </div>
        
    </form>
</div>
</div>
@endsection