<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- cssリセットCDN -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">

    <!-- デフォルトCSS -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!-- public_to_dolistモーダルのCSS -->
    <link rel="stylesheet" href="../css/reward_friend.css">


    <!-- フォント -->
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+2:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- グーグルアイコン -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <title>みんなのやることリスト</title>
</head>
<body>
    <section class="profile_modal" id="rate_modal">
        <div class="profile_area">
            <div class="profile_wrap">

                <a class="profile_modal_top">
                    <div class="profile_img">
                        <img src="https://placehold.jp/500x500.png" alt="ともだちのアイコン">
                    </div>
                </a>

                <div class="profile_modal_main">
                    <div class="profile_modal_info">
                        <h2>HYPERウンチMAN</h2>
                    </div>
                    <div class="profile_theme">ピーナッツバターサンドを作るううううううううううう</div>
                    <div class="star_point_wrapp">
                        <div class="star_point_content">
                            <span class="material-icons-round">stars</span>
                            <p id="star_num"><!--いいね数変数--></p>
                        </div>
                    </div>
                    <div class="profile_modal_todo">
                        <div class="profile_modal_cover">
                            <div class="btn_content">
                                <p>評価をつけよう!!</p>
                                <div id="starBtnId" class="btn_wrapp star_btn">
                                    <div class="btncover star_icon_cover"><span class="material-icons-round">stars</span></div>
                                    <p>いいね！</p>
                                </div>
                            </div>
                            <!-- <div class="btn_wrapp">
                                <div class="btncover share_icon_cover"><span class="material-icons-round">share</span></div>
                                <p>シェア</p>
                            </div>     -->
                        </div>
                        <div class="close-btn" id="close-btn"><span class="material-icons-round">close</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="black-background" id="black-bg"></div>
</section>

<script src="../js/reward_friend_modal.js"></script>
</body>
</html>