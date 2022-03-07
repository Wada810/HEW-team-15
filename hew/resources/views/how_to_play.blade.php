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
    <section class="for_adults">
        <div class="for_adults_window">
            <div class="for_adults_scroll_content">
                <h2 class="p-b p-r">はじめに</h2>

                <p class="p-b p-r">コンピュータは人間の意図をくみ取って動作することはありません。<br>
                プログラムとは、<span class="yellow">コンピュータへの命令をひとつひとつ順番に書き出したもの</span>です。</p>

                <p class="p-b p-r">ロボットに「<span class="yellow">歩く</span>」という動作をさせたい場合に、ロボットに「<span class="yellow">歩け</span>」と命令しただけではロボットは歩けません。ロボットに「<span class="yellow">歩け</span>」という動作を命令させる場合は</p>

                <ul class="p-b p-r">
                    <li class="scroll_content_list">・「右足をあげる」</li>
                    <li class="scroll_content_list">・「左足だけでバランスをとる」</li>
                    <li class="scroll_content_list">・「右足を前に出す」</li>
                    <li class="scroll_content_list">・「右足を着地させる」</li>
                    <li class="scroll_content_list">・「左足をあげる」</li>
                </ul>

                <p class="p-b p-r">といった明確かつコンピュータが理解できる命令が必要です。<br>
                上の例でいうと、右足を上げるだけでも<br>「<span class="yellow">××モーターに××vの電流を××秒流す</span>」などもっと細かく沢山の命令を出さなければいけません。</p>

                <p class="p-b p-r">そういった命令を順番に記述したものがプログラムです。<br>algoはそんなコンピュータのプログラムを人間の動作に当てはめて子供が<span class="yellow">大人をプログラミングする</span>為のアプリです。</p>
            </div>
            <div class="for_adults_under">
                <div class="for_adults_buttons">
                    <button id="adults_prev" class="adults_prev"><span class="material-icons-round">chevron_left</span></button>
                    <button id="adults_next" class="adults_next">次へ</button>
                </div>
                <ul>
                    <li class="light_on"></li>
                    <li class="light_off"></li>
                    <li class="light_off"></li>
                    <li class="light_off"></li>
                    <li class="light_off"></li>
                    <li class="light_off"></li>
                    <li class="light_off"></li>
                    <li class="light_off"></li>
                    <li class="light_off"></li>
                    <li class="light_off"></li>
                </ul>
            </div>
        </div>
    </section>
    <script src="{{asset('js/how_to.js')}}"></script>
@endsection