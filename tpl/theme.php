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

</body>
</html>