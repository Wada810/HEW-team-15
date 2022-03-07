<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- cssリセットCDN -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <!-- デフォルトCSS -->
    <link rel="stylesheet" type="text/css" href="../hew/public/css/style.css">
    <!-- public_to_dolistのCSS -->
    <link rel="stylesheet" type="text/css" href="../css/public_to_dolist.css">
    <!-- public_to_dolistモーダルのCSS -->
    <link rel="stylesheet" href="../css/public_to_do_list_modal.css">


    <!-- フォント -->
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+2:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- グーグルアイコン -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <title>みんなのやることリスト</title>
</head>
<body><!-- ポジションリレイティブをつける -->
<section class="profile_modal" id="profile_modal">
        <div class="profile_area">
            <div class="profile_wrap">
                <a class="profile_modal_top">
                    <div class="profile_rank_tag">
                        <div class="profile_rank_str">RANK</div>
                        <div class="profile_rank_int">1</div>
                    </div>
                    <div class="profile_img">
                        <img src="./img/public_to_dolist/kuma.png" alt="">
                    </div>
                </a>
                <div class="close-btn" id="close-btn"><span class="material-icons-round">close</span></div>
                <div class="profile_modal_main">
                    <div class="profile_modal_info">
                        <h2 class="profile_name"></h2>
                        <div class="star_point_content">
                            <span class="material-icons-round">stars</span>
                            <p class="star_sum"></p>
                        </div>
                    </div>
                    <div class="profile_modal_todo">
                        <div class="profile_theme"></div>
                        <div class="profile_icon_container">
                            <div class="rows">
                                <span class="material-icons-round">format_list_numbered_rtl</span>
                                <p class="rows_sum"></p>
                            </div>
                            <div class="date">
                                <span class="material-icons-round">calendar_today</span>
                                <p class="date_sum"></p>
                            </div>
                        </div>
                        <button type=""><span class="material-icons-round">play_circle</span><span class="play">あそぶ</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="black-background" id="black-bg"></div>
</section>

<div class="header"></div><!-- 仮ヘッダー -->

<!-- 検索バーと表示順ソート -->
<div class="search_sort_content">
    <div class="search_sort_flex">
        <div class="search_div">
            <input placeholder="キーワードを入力" name=""  type="text">
            <button><span class="material-icons-round search_icon">search</span></button>
        </div>

        <!-- セレクトで動かすのか？それ以外の何かで動かすのか？ -->
        <div class="sort_area">
            <div class="sort_content">
                <p class="sort_item">おすすめ順<span class="material-icons-round">arrow_drop_down_circle</span></p>
            </div>
        </div>
    </div>
</div>

    <div class="content_box">
        <!-- 検索件数 -->
        <p class="search_num">検索件数:129件</p>

        <!-- 各ユーザーのやることリスト -->
        <div class="public_list">
            <!-- 友だちのマイページ画面へ飛ぶ -->
            <div class="profile_wrap">
                <div class="profile_icon_name">
                    <div class="friend_icon">
                        <a href="#"><img src="./img/public_to_dolist/kuma.png" alt="友だちのアイコン"></a>
                    </div>
                    <div class="friend_name">
                        <a class="friend_prof_name" href="#">つついつついつついつついつついつ<span class="material-icons-round friendname_stars">stars</span></a>
                    </div>
                </div>
            </div>

            <div class="todo_list open-btn">
                <p class="theme">ピーナッツバターサンドを作る！ピーナッツバターサンドを作る！</p><!-- 長い文章でも検証すること -->
                <div class="icons_flex">
                    <div class="icon_items">
                        <p class="prof_rows_sum"><span class="material-icons-round row_icon">format_list_numbered_rtl</span>18</p>
                        <p class="prof_star_sum"><span class="material-icons-round stars_icon">stars</span>125</p>
                    </div>
                    <p class="data">2022/02/13</p>
                </div>
            </div>
        </div>

        <div class="public_list">
            <!-- 友だちのマイページ画面へ飛ぶ -->
            <div class="profile_wrap">
                <div class="profile_icon_name">
                    <div class="friend_icon">
                        <a href="#"><img src="./img/public_to_dolist/kuma.png" alt="友だちのアイコン"></a>
                    </div>
                    <div class="friend_name">
                        <a class="friend_prof_name" href="#">つついつついつついつついつついつ<span class="material-icons-round friendname_stars">stars</span></a>
                    </div>
                </div>
            </div>

            <div class="todo_list open-btn">
                <p class="theme">ピーナッツバターサンドを作る！</p><!-- 長い文章でも検証すること -->
                <div class="icons_flex">
                    <div class="icon_items">
                        <p class="prof_rows_sum"><span class="material-icons-round row_icon">format_list_numbered_rtl</span>18</p>
                        <p class="prof_star_sum"><span class="material-icons-round stars_icon">stars</span>125</p>
                    </div>
                    <p class="data">2022/02/13</p>
                </div>
            </div>
        </div>

        <div class="public_list">
            <!-- 友だちのマイページ画面へ飛ぶ -->
            <div class="profile_wrap">
                <div class="profile_icon_name">
                    <div class="friend_icon">
                        <a href="#"><img src="./img/public_to_dolist/kuma.png" alt="友だちのアイコン"></a>
                    </div>
                    <div class="friend_name">
                        <a class="friend_prof_name" href="#">つついつついつついつついつついつ<span class="material-icons-round friendname_stars">stars</span></a>
                    </div>
                </div>
            </div>

            <div class="todo_list open-btn">
                <p class="theme">ピーナッツバターサンドを作る！</p><!-- 長い文章でも検証すること -->
                <div class="icons_flex">
                    <div class="icon_items">
                        <p class="prof_rows_sum"><span class="material-icons-round row_icon">format_list_numbered_rtl</span>18</p>
                        <p class="prof_star_sum"><span class="material-icons-round stars_icon">stars</span>125</p>
                    </div>
                    <p class="data">2022/02/13</p>
                </div>
            </div>
        </div>

        <div class="public_list">
            <!-- 友だちのマイページ画面へ飛ぶ -->
            <div class="profile_wrap">
                <div class="profile_icon_name">
                    <div class="friend_icon">
                        <a href="#"><img src="./img/public_to_dolist/kuma.png" alt="友だちのアイコン"></a>
                    </div>
                    <div class="friend_name">
                        <a class="friend_prof_name" href="#">つついつついつついつついつついつ<span class="material-icons-round friendname_stars">stars</span></a>
                    </div>
                </div>
            </div>

            <div class="todo_list open-btn">
                <p class="theme">ピーナッツバターサンドを作る！</p><!-- 長い文章でも検証すること -->
                <div class="icons_flex">
                    <div class="icon_items">
                        <p class="prof_rows_sum"><span class="material-icons-round row_icon">format_list_numbered_rtl</span>18</p>
                        <p class="prof_star_sum"><span class="material-icons-round stars_icon">stars</span>125</p>
                    </div>
                    <p class="data">2022/02/13</p>
                </div>
            </div>
        </div>

        <div class="public_list">
            <!-- 友だちのマイページ画面へ飛ぶ -->
            <div class="profile_wrap">
                <div class="profile_icon_name">
                    <div class="friend_icon">
                        <a href="#"><img src="./img/public_to_dolist/kuma.png" alt="友だちのアイコン"></a>
                    </div>
                    <div class="friend_name">
                        <a class="friend_prof_name" href="#">つついつついつついつついつついつ<span class="material-icons-round friendname_stars">stars</span></a>
                    </div>
                </div>
            </div>

            <div class="todo_list open-btn">
                <p class="theme">ピーナッツバターサンドを作る！</p><!-- 長い文章でも検証すること -->
                <div class="icons_flex">
                    <div class="icon_items">
                        <p class="prof_rows_sum"><span class="material-icons-round row_icon">format_list_numbered_rtl</span>18</p>
                        <p class="prof_star_sum"><span class="material-icons-round stars_icon">stars</span>125</p>
                    </div>
                    <p class="data">2022/02/13</p>
                </div>
            </div>
        </div>
    </div>
<script src="../js/profile_modal.js"></script>
</body>
</html>