@extends("layouts.layout")

@section('css_link')
    <!-- <link rel="stylesheet" href="{{ asset('css/projects/instraction.css') }}"> -->
@endsection

@section('title', 'やることリスト')

@section('body')

<!-- ヘッダー -->
<header class="l_play_header p_play_header">
    <!-- 前のページへ戻るリンク -->
    <a href="{{ route('order') }}" class="p_play_header__back"><span class="material-icons-round">undo</span></a>
    <!-- 一覧戻るボタン --><!--
    <button class="back_button" type="button"><span class="material-icons-outlined">undo</span></button> -->
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
        <form action="{{ route('order') }}" id="order_form" method="get">
            @csrf
            <button class="btn-secondary" id="comp_button">結果へ</button>
        </form>
    </div>
</main>

<section class="l_instraction p_instraction_all_list_modal hidden">

</section>


<script>
    const order_json = <?php print json_encode($data["order"])?> ;
</script>
<script src="{{ asset('js/instraction.js') }}"></script>
@endsection
