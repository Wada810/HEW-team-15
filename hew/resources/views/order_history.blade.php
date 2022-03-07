@extends("layouts.layout")

@section('css_link')
<!-- 個別のｃｓｓがあったらここに -->
<!-- <link rel="stylesheet" href="{{ asset('css/フォルダ名') }}"> -->
<link rel="stylesheet" href="{{ asset('css/projects/order_history.css') }}">
@endsection

@section('title', 'マイページ')

@section('body')
<!-- ここにhtml -->
    <!-- ヘッダー -->
    <header class="l_play_header p_play_header">
        <!-- 前のページへ戻るリンク -->
        <a href="{{ route('home') }}" class="p_play_header__back"><span class="material-icons-round">undo</span></a>
        <div class="p_play_header__title">
            <span>マイページ</span>
        </div>
    </header>

    <main>
        <div id="prof">
            <div class="pattern_cover" id="modalOpen"><div class="palette_cover"><span class="material-icons-round palette">palette</span></div><p class="pattern">パターン変更</p></div>
            <div class="prof_area">
                <div class="prof_cover">
                    <div class="rank_cover"><div class="rank_block"><p class="rank">RANK</p><p class="rank_no">99</p></div></div>
                    <img class="prof_img" src="https://placehold.jp/100x100.png" alt="プロフ画像">
                    <div class="edit_cover" id="modalOpenIcon"><span class="material-icons-round edit">edit</span></div>
                </div>
                <p class="name">プロフ太郎</p>
                <!-- <div class="rank_bar_cover"><div class="rank_bar_tank"><div class="rank_bar"></div></div> -->
                <!-- レベルメーター -->
                <div class="level_box">
                    <div class="animation animation-box"></div>
                </div>
                <div class="rank_point"><p class="left_rank_point">15</p><p class="center_rank_point">/</p><p class="right_rank_point">125</p></div>
                <div class="get_star_cover">
                    <span class="material-icons-round">stars</span>
                    <span class="get_star_num">999</span>
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
                    <div class="todo_list"><div class="top"><p class="todo_theme">構成成分は「水35ℓ、炭素20kg、アンモニア4ℓ、石</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="lines">13</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="fav">123</p></div><div class="data"><p class="year">2022</p><p class="slash">/</p><p class="month">02</p><p class="slash">/</p><p class="day">12</p></div></div></div>
                    <div class="todo_list"><div class="top"><p class="todo_theme">ピーナッツバターサンドを作る！</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="lines">13</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="fav">123</p></div><div class="data"><p class="year">2022</p><p class="slash">/</p><p class="month">02</p><p class="slash">/</p><p class="day">12</p></div></div></div>
                    <div class="todo_list"><div class="top"><p class="todo_theme">ピーナッツバターサンドを作る！</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="lines">13</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="fav">123</p></div><div class="data"><p class="year">2022</p><p class="slash">/</p><p class="month">02</p><p class="slash">/</p><p class="day">12</p></div></div></div>
                    <div class="todo_list"><div class="top"><p class="todo_theme">ピーナッツバターサンドを作る！</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="lines">13</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="fav">123</p></div><div class="data"><p class="year">2022</p><p class="slash">/</p><p class="month">02</p><p class="slash">/</p><p class="day">12</p></div></div></div>
                    <div class="todo_list"><div class="top"><p class="todo_theme">ピーナッツバターサンドを作る！</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="lines">13</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="fav">123</p></div><div class="data"><p class="year">2022</p><p class="slash">/</p><p class="month">02</p><p class="slash">/</p><p class="day">12</p></div></div></div>
                    <div class="todo_list"><div class="top"><p class="todo_theme">ピーナッツバターサンドを作る！</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="lines">13</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="fav">123</p></div><div class="data"><p class="year">2022</p><p class="slash">/</p><p class="month">02</p><p class="slash">/</p><p class="day">12</p></div></div></div>
                    <div class="todo_list"><div class="top"><p class="todo_theme">ピーナッツバターサンドを作る！</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="lines">13</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="fav">123</p></div><div class="data"><p class="year">2022</p><p class="slash">/</p><p class="month">02</p><p class="slash">/</p><p class="day">12</p></div></div></div>
                    <div class="todo_list"><div class="top"><p class="todo_theme">ピーナッツバターサンドを作る！</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="lines">13</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="fav">123</p></div><div class="data"><p class="year">2022</p><p class="slash">/</p><p class="month">02</p><p class="slash">/</p><p class="day">12</p></div></div></div>
                    <div class="todo_list"><div class="top"><p class="todo_theme">ピーナッツバターサンドを作る！</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="lines">13</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="fav">123</p></div><div class="data"><p class="year">2022</p><p class="slash">/</p><p class="month">02</p><p class="slash">/</p><p class="day">12</p></div></div></div>
                    <div class="todo_list"><div class="top"><p class="todo_theme">ピーナッツバターサンドを作る！</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="lines">13</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="fav">123</p></div><div class="data"><p class="year">2022</p><p class="slash">/</p><p class="month">02</p><p class="slash">/</p><p class="day">12</p></div></div></div>
                    <div class="todo_list"><div class="top"><p class="todo_theme">ピーナッツバターサンドを作る！123</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="lines">13</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="fav">123</p></div><div class="data"><p class="year">2022</p><p class="slash">/</p><p class="month">02</p><p class="slash">/</p><p class="day">12</p></div></div></div>
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

        <!-- prof.modal -->
        <div id="release_modal">
            <div class="release_modal">
                <div class="release_cover">
                    <div class="modal_prof_img_area">
                        <div class="modal_rank_area"><div class="modal_rank_cover"><p class="modal_rank">RANK</p><p class="modal_rank_sum">97</p></div></div>
                        <img class="modal_prof_img" src="" alt="">
                    </div>
                    <div class="modal_top">
                        <div class="modal_close"><span class="material-icons-round modal_close_icon">cancel</span></div>
                        <div class="modal_user_name"><p class="modal_name">SUPER_NENECHI</p></div>
                        <div class="modal_half"><div class="modal_fav_cover"><span class="material-icons-round moda_fav_icon">stars</span><p class="modal_sums">278</p></div></div>
                        <div class="modal_theme_cover"><p class="modal_theme">構成成分は「水35ℓ、炭素20kg、アンモニア4ℓ、石</p></div>
                    </div>
                    <div class="modal_under">
                        <div class="modal_items">
                            <div class="modal_lines_cover">
                                <span class="material-icons-round modal_lines_icon">format_list_numbered</span>
                                
                                <p class="modal_lines">13</p>
                            </div>
                            <div class="modal_date_cover">
                                <span class="material-icons-round modal_calendar_icon">event</span>
                                <div class="modal_date"><p class="modal_year">2022</p><p class="modal_slash">/</p><p class="modal_month">02</p><p class="modal_slash">/</p><p class="modal_day">23</p></div>
                                <div class="modal_time"><p class="modal_hour">23</p><p class="modal_dott">:</p><p class="modal_minutes">11</p></div>
                            </div>
                        </div>
                        <div class="modal_button_cover">
                            <div class="modal_button modal_lerease_btn"><span class="material-icons-round modal_release_icon">public</span><p class="modal_release_p">公開</p></div>
                            <div class="modal_button modal_play_btn"><span class="material-icons-round modal_play_icon">play_circle</span><p class="modal_play_p">あそぶ</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- releaseCheck.modal -->
        <div id="release_check_modal">
            <div class="release_check_modal_cover">
                <div class="release_top">
                    <p class="release_p">みんなにやることリストを公開しよう!!</p>
                </div>
                <div class="release_under">
                    <div class="release_check_area">
                        <div class="release_ok_area release_check_cover"><div class="release_ok_cover release_check_inner"><span class="material-icons-round release_ok_icon">public</span><p class="release_ok_p">公開</p></div><input class="check_ok check" type="radio" name="release_dete" value="1"></div>
                        <div class="release_no_area release_check_cover"><div class="release_no_cover release_check_inner"><span class="material-icons-round release_no_icon">public_off</span><p class="release_no_p">非公開</p></div><input class="check_no check" type="radio" name="release_dete" value="0"></div>
                    </div>
                </div>
                <div class="release_comp"><p class="comp_p">適用</p></div>
            </div>
        </div>
    </main>
    <script src="{{ asset('js/pattern_change.js') }}"></script>
@endsection
