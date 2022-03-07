<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    
    <link rel="stylesheet" href="../css/style.scss">
    
    <link rel="stylesheet" href="../css/order_history.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+2:wght@400;600;700;800&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
        <button class="back_button" type="button"><span class="material-icons-outlined">undo</span></button>
        <h1>マイページ</h1>
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
    </main>
    <script src="../pattern_change.js"></script>
</body>
</html>