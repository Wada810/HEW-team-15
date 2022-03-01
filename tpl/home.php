<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/foundation/destyle.css">
    <!-- homeのCSS -->
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <title>HOME</title>
</head>
<body>

<div class="home">ホーム</div><!-- ヘッダーとなるところ -->

<form method="post" action="home.php">

    <div class="content_box">

        <div class="user_profile">
            <a href="#"><!-- プロフィール画面へ -->
                <p><img src="<?php echo $img_file ;?>" alt="アイコン画像(固定のアイコン画像)"></p>
                <!-- <?php /* echo $name; */ ?>さん 名前表示させるのであればコメントアウト外してよし-->
                <p>プロフィール</p>
            </a>
        </div>
        
        <h1>タイトル</h1>

        <div class="btn_box">
            <div><button class="menu_btn" type ="submit" name="game_start" value="">ゲームスタート</button></div>
            <button class="menu_btn" type ="submit" name="everyone_instructions" value="">みんなの指示書</button>
            <div><button class="menu_btn" type ="submit" name="rule" value="">遊び方</button></div>
        </div>

    </div>

</form>
</body>
</html>