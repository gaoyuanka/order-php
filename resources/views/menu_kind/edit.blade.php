@extends('layout')
@section('content')

<div class="overlay overlay-bg"></div>
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="section-top-border">
            <div class="progress-table">
                
                <form method="POST" action="/menu_kind/add">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-lg-10 button-group-area mt-200">
                            <div class="single-contact col-lg-6 col-md-8">
                                <p class="text-white">メニュー種類作成</p>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if ($menu_kinds)
                                @foreach ($menu_kinds as $menu_kind)
                                    <div class="table-no-row">
                                        <div class="rest_kind1"><a href="#" class="genric-btn gao">{{$menu_kind->name}}</a>     </div>
                                        <div class="rest_kind2"><a href="/menu_kind/delete/{{$menu_kind->id}}" class="genric-btn danger">X</a>   </div>
                                    </div>
                                @endforeach
                            @endif
                            @if (count($addables))
                                <div class="table-no-row">
                                    {{-- <div class="rest_kind1"><a href="#" class="genric-btn gao">{{config('const.menu_kind')[$menu_kind->kind_id]}}</a>     </div>
                                    <div class="rest_kind2"><a href="#" class="genric-btn danger">X</a>   </div> --}}
                                    <div class="rest_kind1 form-select " style="padding-top:10px">
                                        <select name="add_kind_id" id="add_kind_id">
                                            @foreach ($addables as $add_key => $add_value)
                                                    <option value={{$add_key}}>{{$add_value}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="rest_kind2" style="padding-top:10px">
                                        {{-- <a href="/menu_kind/add" class="genric-btn danger">＋</a>    --}}
                                        
                                            <button class="btn white-bg " style="height:40px;padding-top:10px;"><span
                                                    class="text-black mr-5 ml-5" style="text-align:center;">{{'追加'}}</span></button> <br>
                                    </div>
                                </div>

                                
                            @endif

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

