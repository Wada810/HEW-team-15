<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <!-- css -->
    <link rel="stylesheet" href="../css/style.css">
    <title>ログイン</title>
</head>
<body>
    <main>
        <h1>ログイン</h1>
        <form method="post" id="form">
            <label>
                <div>メールアドレス</div>
                <input type="text" name="email">
            </label>
            <label>
                <div>パスワード</div>
                <input type="password" name="password">
            </label>
            <div class="err_msg"><?php echo $err ?? ''; ?></div>
            <button type="submit" name="state" value="login" id="sign_in_btn" class="btn">ログインする</button>
        </form>
    </main>
</body>
</html>
