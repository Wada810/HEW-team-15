<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>テーマ入力</title>
</head>
<body>

<p><a href="home.php">←戻る</a></p>

<form method="post" action="order.php">
  

  <h1>テーマ</h1>
  <input type="text" id="theme" name="theme" value=""   placeholder="サンドイッチをつくる" > 
  <!-- memo -->
  <!-- テーマテンプレはDBから？　後々？ -->
  
  <h2>ルール</h2>
  <p>制限時間:<input type="text" id="time"   name="time"    value="" placeholder="15分"  ></p>
  <p>報酬　　:<input type="text" id="reward" name="reward"  value="" placeholder="100円" ></p>
  <p>依頼者　:<input type="text" id="author"  name="author"   value="" placeholder="実母"  ></p>
  <br>
  <button type="submit" name="order" value="">指令書作成</button>
  
</form>
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
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/theme.css">

    <title>theme</title>
</head>
<body>




<header>
    <div class="header_button">
        <button class="back_button"><span class="material-icons-round">undo</span></button>
    </div>
    <div class="header_title">
        <p><span class="material-icons-round">library_books</span>指令の登録</p>
    </div>
</header>

<main>
    <div class="theme_block">
        <div class="theme_wrapper">
            <div class="title_area">
                <h1>テーマを決めよう！！</h1>
                <p>30文字以内</p>
            </div>
            <form action="">
                <textarea id="area1" class="textarea" onkeyup="viewStrLen();" maxlength="30" placeholder="ピーナッツバターサンドをつくる"></textarea>
                <div><p><span id="strLen">0</span>/30</p></div>
                <button>次へ</button>
            </form>
        </div>
    </div>
</main>

<script src="../text_count.js"></script>
</body>
</html>