@extends("layouts.layout")

@section('css_link')
    <link rel="stylesheet" href="{{ asset('css/projects/how_to_play.css') }}">
@endsection

@section('title', '遊び方')
    <heade class="l_play_header p_play_header">
        <a href="{{ url()->previous()}}" class="p_play_header__back"><span class="material-icons-round">undo</span></a>
        <div class="p_play_header__title">

        </div>
    </heade>
    <div class="l_play_header__spacer"></div>

    <section class="top">
        <div class="mb2 title">
            <span class="material-icons-round up_side_down">tungsten</span>
            <p>あそびかた</p>
        </div>
        <div class="btn-secondary mb p" id="howto_kids">
            <img src="{{asset('img/panda.png')}}" class="panda_right">
            こども用
        </div>
        <div class="btn-secondary mb p" id="howto_adults">大人用</div>
    </section>
    <section class="for_kids">

    </section>
    <section class="for_adults"></section>
@section('body')
@endsection