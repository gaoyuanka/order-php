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
                                <p class="text-white">メニュー作成</p>
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
                            @if ($menus)
                                @foreach ($menus as $menu)
                                    <div class="table-no-row">
                                        <div class="rest_kind1"><a href="/menu/edit/{{$menu->id}}" class="genric-btn gao">{{$menu->name}}</a>     </div>
                                        <div class="rest_kind2"><a href="/menu/delete/{{$menu->id}}" class="genric-btn danger">X</a>   </div>
                                    </div>
                                @endforeach
                            @endif
                            <div class="table-no-row">
                                <div class="d-flex ">
                                    <a href="menu_kind/edit" class="genric-btn success circle arrow">{{'種類追加へ'}}</a>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <a href="menu/create" class="genric-btn success circle  ml-10">{{'新メニュー追加'}}</a>
                                </div>
                            </div>
                                
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

