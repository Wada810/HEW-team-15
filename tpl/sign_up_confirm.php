<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- css -->
    <link rel="stylesheet" href="../css/style.css">
    <title>入力内容の確認</title>
</head>
<body>

    <main>
        <h1>入力内容の確認</h1>
        <!-- 入力内容の確認 -->
        <div id="progress">
            <div class="point completed"></div>
            <div class="point current"></div>
            <div class="point"></div>
        </div>
        <div class="items">
            <div class=item_title>ユーザー名</div>
            <div class="item_detail"><?php echo $data['user_name']["value"]; ?></div>
        </div>
        <div class="items">
            <div class=item_title>メールアドレス</div>
            <div class="item_detail"><?php echo $data['email']["value"]; ?></div>
        </div>
        <div class="items">
            <div class=item_title>パスワード</div>
            <div class="item_detail"><?php echo str_repeat("●",strlen($data['password']["value"])); ?></div>
        </div>
        <form action="" method="post">
            <div class="btn_box">
                <button type="submit" name="submit" value="back" class="btn back">修正する</button>
                <button type="submit" name="submit" value="register" class="btn">登録する</button>
            </div>
        </form>
    </main>
</body>
</html>