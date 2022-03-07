@extends("layouts.layout")

@section('css_link')
    <link rel="stylesheet" href="{{ asset('css/projects/player_change.css') }}">
@endsection

@section('title', 'やることリスト')

@section('body')

<!-- ヘッダー -->
<header class="l_play_header p_play_header">
    <!-- 前のページへ戻るリンク -->
    <a href="{{ route('order') }}" class="p_play_header__back" id="back_link"><span class="material-icons-round">undo</span></a>
    <div class="p_play_header__back hidden" id="back_text"><span class="material-icons-round">undo</span></div>
    <div class="p_play_header__back hidden" id="back_comp"><span class="material-icons-round">undo</span></div>
    <div class="p_play_header__title">
        <span class="material-icons-round">library_books</span>
        <span>やることリスト</span>
    </div>
</header>
<div class="l_play_header__spacer"></div>
<div class="theme_title">{{$data["theme"] ?? ""}}</div>
<div class="theme_title__spacer"></div>
<!-- コンテンツ -->
<main id="main" class="l_instraction">
    <div class="p_instraction_content"></div>
    <div class="p_instraction_content"></div>

    <div class="p_instraction__move" id="move_previous"><span class="material-icons-round up-arrow">expand_less</span></div>
    <div class="p_instraction_content_active">
    </div>
    <div class="p_instraction__move" id="move_next"><span class="material-icons-round down-arrow">keyboard_arrow_down</span></div>
    <div class="p_instraction__tools">
        <div class="p_instraction__dots">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="p_instraction_all">
            一覧を見る
        </div>
    </div>
    <!-- 送信ボタン  -->
    <div class="p_button_box-only c_bg-white">

    <button class="btn-secondary" id="comp_button">結果へ</button>
    </div>
</main>

<section class="l_instraction p_instraction_all_list_modal"></section>


<form action="{{ route('order') }}" id="order_form" method="get">
    @csrf
</form>
<section class="p_instraction_comp_modal">
    <div class="p_instraction_comp_modal_wrapper">
        <span class="material-icons-round" id="close_comp_modal">close</span>
        <p class="p_instraction_comp_modal_q">お題は達成できた？</p>
        <div class="p_instraction_comp_modal_window">
            <p class="p_instraction_comp_modal_title">お題</p>
            <p class="p_instraction_comp_modal_theme">{{$data["theme"] ?? ""}}</p>
            <div class="p_instraction_comp_modal_judge_box">
                <a href="{{route('order')}}"><button class="fail"><span class="material-icons-round">clear</span><p>失敗</p></button></a>
                <a href="{{route('finish')}}"><button class="success"><span class="material-icons-round">radio_button_unchecked</span><p>成功!</p></button></a>
            </div>
        </div>
    </div>
</section>

<!-- 見せようモーダル -->
<div class="player_change_modal">
    <div class="player_change_wrapp">
        <p>大人の人にみせよう！</p>
        <p class="invisible">i</p>
        <button class="btn-secondary dokidoki">やることリストを見せる</button>
    </div>
</div>
<script>
    const order_json = <?php print json_encode($data["order"])?> ;
</script>
<script src="{{ asset('js/instraction.js') }}"></script>
@endsection
