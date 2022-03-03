<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">

        <title>指令書作成</title>
    </head>
    <body>

        <div>
            <h1><?php echo $_POST['theme'] ;?></h1>
            <p><?php echo $_POST['time'] ;?></p>
            <p><?php echo $_POST['reward'] ;?></p>
            <p><?php echo $_POST['author'] ;?></p>
        </div>

        <div>

            <div id="order_area">
                <h2>指令書</h2>

            </div>

            <input type="text" name="order" value="" id="order" >

            <form action="order.php" method="post" id="send_order">
                <br>
                <button type="submit" name="flg" value="on" >指令書作成</button>
            </form>

        </div>

<script src="./js/order.js" ></script>

</body>
</html>