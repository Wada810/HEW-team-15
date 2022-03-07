@extends("layouts.layout")

@section('css_link')
    <link rel="stylesheet" href="{{ asset('css/projects/how_to_play.css') }}">
@endsection

@section('title', '遊び方')
@section('body')
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
        <div class="for_kids_window">
            <img src="{{asset('img/panda.png')}}" class="kids_panda">
            <div class="kids_image_box">
                <img id="kids_image" src="{{asset('img/how_to_kids/1.png')}}">
            </div>
            <div class="kids_text_box">
                <p>まずは<span class="yellow">お題</span>を決めよう!</p>
                <div class="button_box">
                    <div class="back_button" id="back_button"><span class="material-icons-round">arrow_back_ios_new</span></div>
                    <div class="next_button" id="next_button">次へ</div>
                </div>
            </div>
            <div class="page_dots">
                <span class="active"></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </section>
    <section class="for_adults"></section>
    <script src="{{asset('js/how_to.js')}}"></script>
@endsection