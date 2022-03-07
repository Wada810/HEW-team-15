<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- google icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=M+PLUS+2:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!--  -->
    <link rel="stylesheet" href="../css/style.scss">
    <link rel="stylesheet" href="../css/reward.css">

    <title>algo</title>
</head>
<body>





<header>
    <div class="header_button">
        <button class="back_button"><span class="material-icons-round">undo</span></button>
    </div>
    <div class="header_title">
        <p><span class="material-icons-round">library_books</span>リワード</p>
    </div>
</header>


<main>
    <div class="reward_wrapper">
       <p class="reward_text">ここの文字どうする？</p>
       <!-- 次のレベル -->
       <section class="level_wrapper">
           <p class="next_level">NEXT RANK:<span>2</span></p>
           <!-- レベル　メーター -->
           <div class="level_box">
               <div class="animation animation-box">
               </div>
           </div>
       </section>
    </div>

    <div class="popup" id="js-popup">
        <div class="popup-inner">
            <div class="popup_header">LEVEL UP <span class="material-icons-round">keyboard_double_arrow_up</span></div>
            <div class="close-btn" id="js-close-btn"></div>
            <a href="#">
                <p class="get_text">GET!!</p>
                <div class="get_item_block">
                    <div>
                        <img src="https://placehold.jp/50x50.png" alt="ポップアップ画像">
                        <p>うさぎのアイコン</p>
                    </div>
                    <div>
                        <img src="https://placehold.jp/50x50.png" alt="ポップアップ画像">
                        <p>アクアマリン</p>
                    </div>
                </div>
                <button id="js-close-btn">OK</button>
            </a>

        </div>
        <div class="black-background" id="js-black-bg"></div>
    </div>
</main>

<footer>
    <button><a href="">一覧に戻る</a></button>
</footer>

<script src="../reward.js"></script>
</body>
</html>