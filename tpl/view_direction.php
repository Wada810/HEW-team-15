<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/view_direction.css">
    <link rel="stylesheet" href="./css/foundation">
    <title>指示書確認</title>
</head>
<body>
    <header>
        <h1>指示書確認</h1>
    </header>
    <main>
        <p class="theme">テーマ</p>
        <div class="view">
            <ol class="view_list">
                <div class="order"><li class="">リンゴをとる</li><div class="judge"><p class="correct">○</p><p class="incorrect">×</p></div></div>
                <div class="order rep"><li class="">リンゴを切る1</li><div class="judge"><p class="correct">○</p><p class="incorrect">×</p></div></div>
                <div class="rep_box">
                    <ul>
                        <li class="rep_next">リンゴを切る2</li>
                        <li class="rep_next">リンゴを切る3</li>
                        <li class="rep_next">リンゴを切る4</li>
                    </ul>
                </div>
                <div class="order"><li class="">リンゴを食べる</li><div class="judge"><p class="correct">○</p><p class="incorrect">×</p></div></div>
                <p class="unopen">・・・</p>
            </ol>
        </div>
        <form method="POST" action="./view_direction.php" class="form">
            <div class="com_button_cover"><button class="complete_button" type="submit" name="status" value="complete">完成</button></div>
        </form>
    </main>
    <footer>
    <form method="POST" action="./view_direction.php" class="form">
        <div class="back_button_cover"><button class="back_button" type="submit" name="status" value="back">やりなおす</button></div>
    </form>
    </footer>
    <script src="./js/view_direction.js"></script>
</body>
</html>