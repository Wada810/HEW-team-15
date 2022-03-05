@extends("layouts.layout")

@section('css_link')
    <link rel="stylesheet" href="{{ asset('css/projects/instraction.css') }}">
@endsection

@section('title', 'やることリスト')

@section('body')

<!-- ヘッダー -->
<header class="l_play_header p_play_header">
    <!-- 前のページへ戻るリンク -->
    <a href="{{ route('order') }}" class="p_play_header__back"><span class="material-icons-round">undo</span></a>
    <!-- 一覧戻るボタン -->
    <button class="back_button" type="button"><span class="material-icons-outlined">undo</span></button>
    <div class="p_play_header__title">
        <span class="material-icons-round">library_books</span>
        <span>やることリスト</span>
    </div>
</header>
<div class="l_play_header__spacer"></div>
<div class="theme_title">theme</div>
<div class="theme_title__spacer"></div>
<!-- コンテンツ -->
<main>
    <div id="view_home">
        <!-- <div class="theme_cover"><p class="theme">ピーナッツバターサンドを作る！</p></div> -->
        <div class="view">
            <div class="sub_order_cover">
                <div class="first_order sub_order"><p class="first_number"></p><p class="first_order_val sub_val"></p></div>
                <div class="second_order sub_order"><p class="second_number"></p><p class="second_order_val sub_val"></p></div>
            </div>
            <p class="up button"><span class="material-icons-round up-arrow">expand_less</span></p>
            <div class="active_order"><div class="active_cover"><p class="active_number number"></p><p class="active_order_val"></p></div></div>
            <p class="down button"><span class="material-icons-round down-arrow">keyboard_arrow_down</span></p>
            <ul class="view_list">
                <li class="order">パンを2まいとる</li>
                <li class="order">バターナイフをとる</li>
                <li class="order">ピーナッツバターをぬりぬりぬりぬりぬりぬりぬりぬりぬりぬりぬりぬり</li>
                <li class="order">バターナイフをとる1</li>
                <li class="order">バターナイフをとる2</li>
                <li class="order">バターナイフをとる3</li>
                <li class="order">バターナイフをとる4</li>
            </ul>
            <div class="sub_action">
                <p class="unopen"><span class="material-icons-round">more_vert</span></p>
                <p class="all_list">一覧を見る</p>
            </div>
            <button class="com_button" type="button">結果へ</button>
        </div>
    </div>
    <div id="all_modal">
        <div class="all_theme_cover"><p class="all_theme">ピーナッツバターサンドを作る！</p></div>
        <ul class="m_view_list">
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
            <li class="list_order">パンをにまいとる</li>
        </ul>
    </div>
    <div id="judge_modal">
        <p class="q_p">目標を達成できましたか？</p>
        <div class="judge_modal_cover">
            <div class="modal_theme_cover">
                <p class="modal_theme_view">テーマ</p>
                <p class="modal_theme">ピーナッツバターサンドを作る！</p>
            </div>
            <div class="judge_cover">
                <div class="no_cover">
                    <p class="judge_button no">×</p>
                    <p class="no_p">失敗</p>
                </div>
                <div class="ok_cover">
                    <p class="judge_button ok">○</p>
                    <p class="ok_p">成功</p>
                </div>
            </div>
        </div>
        <div id="button_modal">
            <div class="button_cover">
                <button class="re_button com_button" type="button">やり直す</button>
                <button class="end_button com_button" type="button">終了する</button>
            </div>
        </div>
    </div>
</main>

<!-- 送信ボタン -->
<!-- <div class="p_button_box-only">
    <form action="{{ route('order') }}" id="order_form" method="get">
        @csrf
        <button class="btn-primary">次へ</button>
    </form>
</div> -->

<script src="{{ asset('js/instraction.js') }}"></script>
@endsection
