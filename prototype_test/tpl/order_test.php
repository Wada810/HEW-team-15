<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>指令書作成</title>
    <link rel="stylesheet" href="css/index.css" type="text/css">
</head>
<body>

        <h2>アルゴリズム</h2>

        <ol id="order_list">
        
            

        </ol>
        
    
    <br>
    <input type="text" name="order" value="" id="order"  >
    <p id="log"></p>
    <form action="order_check.php" method="post" id="send_order">
        

        <br>

        <button type="submit" name="flg" value="on" >指令書確認</button>
    </form>

    <script src="./Sortable-master/Sortable.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./js/function.js" ></script>
<script src="./js/test.js" ></script>



</body>
</html>