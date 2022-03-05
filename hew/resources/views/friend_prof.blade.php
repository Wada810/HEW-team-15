@extends("layouts.layout")

@section('css_link')
<!-- 個別のｃｓｓがあったらここに -->
<!-- <link rel="stylesheet" href="{{ asset('css/フォルダ名') }}"> -->
<link rel="stylesheet" href="{{ asset('css/projects/friend_prof.css') }}">
@endsection

@section('title', 'ともだちのマイページ')

@section('body')
<!-- ここにhtml -->
    <!-- ヘッダー -->
    <header class="l_play_header p_play_header">
        <!-- 前のページへ戻るリンク -->
        <a href="{{ route('order') }}" class="p_play_header__back"><span class="material-icons-round">undo</span></a>
        <div class="p_play_header__title">
            <span>新規登録</span>
        </div>
    </header>

    <main>
        <div id="prof">
            <div class="prof_area">
                <div class="prof_cover">
                    <div class="rank_cover"><div class="rank_block"><p class="rank">RANK</p><p class="rank_no">99</p></div></div>
                    <img class="prof_img" src="https://placehold.jp/100x100.png" alt="プロフ画像">
                </div>
                <p class="name">プロフ太郎</p>
                <div class="star_cover">
                    <div class="friend_get_star_cover get_star_cover">
                        <span class="material-icons-round">stars</span>
                        <span class="get_star_num">999</span>
                    </div>
                </div>
            </div>
        </div>
        <div id="todo">
            <div class="todo_sort_cover">
                <div class="text-divider"><p class="todo_title">作ったやることリスト</p></div>
                <div class="item_list">
                    <div class="lines_num_cover"><span class="material-icons-round lines_icon line_num_icon">library_books</span><p class="line_num">13</p></div>
                    <div class="sort_cover"><p class="sort">ソート:</p><p class="sort_seed">新しい順</p><span class="material-icons-round drop_arrow">arrow_drop_down_circle</span></div>
                </div>
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
        <div class="popup" id="js-popup">
            <div class="popup-inner">
                <div class="popup_header">カラーパターン</div>
                    <div class="modal_items">
                        <div>
                            <img src="https://placehold.jp/100x100.png" alt="ポップアップ画像">
                            <p>エメラルド</p>
                        </div>
                        <div>
                            <img src="https://placehold.jp/100x100.png" alt="ポップアップ画像">
                            <p>ワインレッド</p>
                        </div>
                        <div>
                            <img src="https://placehold.jp/100x100.png" alt="ポップアップ画像">
                            <p>オーシャンブルー</p>
                        </div>
                        <div>
                            <img src="https://placehold.jp/100x100.png" alt="ポップアップ画像">
                            <p>グリーンティー</p>
                        </div>
                        <div>
                            <img src="https://placehold.jp/100x100.png" alt="ポップアップ画像">
                            <p>スーパーウンコ</p>
                        </div>
                    </div>
                    <button id="js-close-btn">OK</button>
                </div>
            <div class="black-background" id="js-black-bg"></div>
        </div>
    </main>
@endsection