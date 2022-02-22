<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- css -->
    <link rel="stylesheet" href="../css/style.css">
    <title>新規登録</title>
</head>
<body>

<main>
    <h1>新規登録</h1>
    <form method="post" id="form">
            <label>
                <div class=item_title>ユーザーネーム</div>
                <input type="text" name="user_name" value="<?php echo $data['user_name']["value"]; ?>">
            </label>
            <label>
                <div class=item_title>メールアドレス</div>
                <input type="text" name="email" value="<?php echo $data['email']["value"]; ?>">
            </label>
            <label>
                <div class=item_title>パスワード</div>
                <input type="password" name="password">
            </label>
            <label>
                <div class=item_title>パスワード（確認）</div>
                <input type="password" name="password_conf">
            </label>
            <label>
            <div id="privacy"><input type="checkbox" name="checker"><a>利用規約</a>と<a>プライバシーポリシー</a>に同意する</div>
            <button type="submit" name="submit" value="confirm" id="sign_up_btn" class="btn">入力内容を確認する</button>
        </form>
</main>

</body>
</html>