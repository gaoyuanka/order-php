@extends('layout')
@section('content')
<div class="container">

<div class="section-top-border">
    {{-- <div class="progress-table-wrap"> --}}
        <div class="progress-table">
            <div class="progress-table-background">
            {{-- <div class="table-head">
                <div class="serial">#</div>
                <div class="country">Countries</div>
                <div class="visit">Visits</div>
                <div class="percentage">Percentages</div>
            </div> --}}
            <div class="table-row">
                <div class="serial">店舗名 </div>
                {{-- <div class="country"> <img src="img/f1.jpg" alt="flag">Canada</div> --}}
                <div class="visit ">{{$restaurant->name}}</div>
            </div>
            <div class="table-row">
                <div class="serial">ふりがな</div>
                <div class="visit">{{$restaurant->furi_name}}</div>
            </div>
            <div class="table-row">
                <div class="serial">郵便番号</div>
                <div class="visit">{{$restaurant->post}}</div>
            </div>
            <div class="table-row">
                <div class="serial">店舗場所</div>
                <div class="visit">{{$restaurant->address}}</div>
            </div>
            <div class="table-row">
                <div class="serial">店舗種類</div>
                <div class="visit">{{$restaurant->rest_type}}</div>
            </div>
            <div class="table-row">
                <div class="serial">営業時間</div>
                <div class="visit">{{$time}}</div>
            </div>
            <div class="table-row">
                <div class="serial">店舗リンク</div>
                <div class="visit">{{$restaurant->link}}</div>
            </div>
            <div class="table-row">
                <div class="serial">店舗紹介</div>
                <div class="info"><textarea id="story" name="story"
                    rows="5" cols="18" style="border:0px" readonly>{{$restaurant->info}}</textarea>
                </div>
            </div>
        </div>
        </div>
        <div class="col-lg-10 d-flex justify-content-end">
            <a href="/restaurant/edit" class="primary-btn white-bg d-inline-flex align-items-center mt-20"><span
                    class="text-black mr-10">編集</span><span
                    class="text-black lnr lnr-arrow-right"></span></a> <br>
        </div>
    {{-- </div> --}}
</div>
</div>
@endsection
