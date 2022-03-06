@extends("layouts.layout")

@section('css_link')
<link rel="stylesheet" href="{{asset('css/projects/order_history.css')}}">
@endsection

@section('title', 'マイページ')

@section('body')

<header class="l_play_header p_play_header">
    <a href="{{ url()->previous()}}" class="p_play_header__back"><span class="material-icons-round">undo</span></a>
    <div class="p_play_header__title">
        <span>マイページ</span>
    </div>
</header>
<div class="l_play_header__spacer"></div>
<main>
    <div id="prof">
        <div class="pattern_cover" id="modalOpen"><div class="palette_cover"><span class="material-icons-round palette">palette</span></div><p class="pattern">パターン変更</p></div>
        <div class="prof_area">
            <div class="prof_cover">
                <div class="rank_cover"><div class="rank_block"><p class="rank">RANK</p><p class="rank_no">{{$user["level"]}}</p></div></div>
                <img class="prof_img" src="https://placehold.jp/100x100.png" alt="プロフ画像">
                <div class="edit_cover" id="modalOpenIcon"><span class="material-icons-round edit">edit</span></div>
            </div>
            <p class="name">{{$user["name"]}}</p>
            <!-- <div class="rank_bar_cover"><div class="rank_bar_tank"><div class="rank_bar"></div></div> -->
            <!-- レベルメーター -->
            <div class="level_box">
                <div class="animation-box"><div class="animation"></div></div>
            </div>
            <div class="rank_point">
                <p class="left_rank_point">{{$user["total_exp"]}}</p><p class="center_rank_point">/</p><p class="right_rank_point">{{$user["next"]}}</p>
            </div>
            <div class="get_star_cover">
                <span class="material-icons-round">stars</span>
                <span class="get_star_num">999</span>
            </div>
        </div>
    </div>
    <div id="todo">
        <div class="todo_sort_cover">
            <div class="text-divider"><p class="todo_title">作ったやることリスト</p></div>
            <div class="sort_cover"><p class="sort">ソート:</p><p class="sort_seed">新しい順</p><span class="material-icons-round drop_arrow">arrow_drop_down_circle</span></div>
        </div>
        <div class="todo_scroll">
            <div class="todo_list_cover">
                <div class="todo_list"><div class="top"><p class="todo_theme">ピーナッツバターサンドを作る！</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="cross">×</p><p class="lines">13</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="cross">×</p><p class="fav">123</p></div><div class="data"><p class="year">2022</p><p class="slash">/</p><p class="month">02</p><p class="slash">/</p><p class="day">12</p></div></div></div>
                <div class="todo_list"><div class="top"><p class="todo_theme">ピーナッツバターサンドを作る！</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="cross">×</p><p class="lines">13</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="cross">×</p><p class="fav">123</p></div><div class="data"><p class="year">2022</p><p class="slash">/</p><p class="month">02</p><p class="slash">/</p><p class="day">12</p></div></div></div>
                <div class="todo_list"><div class="top"><p class="todo_theme">ピーナッツバターサンドを作る！</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="cross">×</p><p class="lines">13</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="cross">×</p><p class="fav">123</p></div><div class="data"><p class="year">2022</p><p class="slash">/</p><p class="month">02</p><p class="slash">/</p><p class="day">12</p></div></div></div>
                <div class="todo_list"><div class="top"><p class="todo_theme">ピーナッツバターサンドを作る！</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="cross">×</p><p class="lines">13</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="cross">×</p><p class="fav">123</p></div><div class="data"><p class="year">2022</p><p class="slash">/</p><p class="month">02</p><p class="slash">/</p><p class="day">12</p></div></div></div>
                <div class="todo_list"><div class="top"><p class="todo_theme">ピーナッツバターサンドを作る！</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="cross">×</p><p class="lines">13</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="cross">×</p><p class="fav">123</p></div><div class="data"><p class="year">2022</p><p class="slash">/</p><p class="month">02</p><p class="slash">/</p><p class="day">12</p></div></div></div>
            </div>
        </div>
    </div>
    <!-- modal -->
    <!-- パターン変更 -->
    <div class="popup" id="js-popup">
        <div class="popup-inner">
            <div class="popup_header">カラーパターン</div>
                <div class="modal_items">
                    <div>
                        <div class="color_item emerald"></div>
                        <p>エメラルド</p>
                    </div>
                    <div>
                        <div class="color_item emrald_green"></div>
                        <p>エメラルドグリーン</p>
                    </div>
                    <div>
                        <div class="color_item oceanblue"></div>
                        <p>オーシャンブルー</p>
                    </div>
                    <div>
                        <div class="color_item strawberry"></div>
                        <p>ストロベリー</p>
                    </div>
                </div>
                <button id="js-close-btn">OK</button>
            </div>
        <div class="black-background" id="js-black-bg"></div>
    </div>
    <!-- アイコン変更 -->
    <div class="popup" id="js-popup-2">
        <div class="popup-inner">
            <div class="popup_header">プロフィールアイコン</div>
                <div class="modal_items_icon">
                    <!-- active_icon 選択したアイコン -->
                    <div class="icon_btn active_icon">
                        <div class="icon_cover">
                            <img class="icon_img" src="https://placehold.jp/50x50.png" alt="プロフ画像">
                        </div>
                        <p>ぱんだ</p>
                    </div>
                    <div class="icon_btn">
                        <div class="icon_cover">
                            <img class="icon_img" src="https://placehold.jp/100x100.png" alt="プロフ画像">
                        </div>
                        <p>うさぎ</p>
                    </div>
                    <div class="icon_btn">
                        <div class="icon_cover">
                            <img class="icon_img" src="https://placehold.jp/200x200.png" alt="プロフ画像">
                        </div>
                        <p>ちわわマグナム</p>
                    </div>
                    <div class="icon_btn">
                        <div class="icon_cover">
                            <img class="icon_img" src="https://placehold.jp/200x50.png" alt="プロフ画像">
                        </div>
                        <p>ぺんぎんぎん</p>
                    </div>
                    <div class="icon_btn">
                        <div class="icon_cover">
                            <img class="icon_img" src="https://placehold.jp/50x200.png" alt="プロフ画像">
                        </div>
                        <p>はむすた</p>
                    </div>
                    <div class="icon_btn">
                        <div class="icon_cover">
                            <img class="icon_img" src="https://placehold.jp/50x200.png" alt="プロフ画像">
                        </div>
                        <p>はむすた</p>
                    </div>
                    <div class="icon_btn">
                        <div class="icon_cover">
                            <img class="icon_img" src="https://placehold.jp/50x200.png" alt="プロフ画像">
                        </div>
                        <p>はむすた</p>
                    </div>
                </div>
                <button id="js-close-btn-2">OK</button>
            </div>
        <div class="black-background" id="js-black-bg-2"></div>
    </div>
</main>


<script>
    const user = <?php print json_encode($user)?> ;
</script>
<script src="{{asset('js/pattern_change.js')}}"></script>
@endsection