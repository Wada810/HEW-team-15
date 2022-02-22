<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <form method="post" action="./profile_edit.php">
    <?php foreach($list as $row){ ?>
        <input class="" type="text" name="icon_image" value="">
        <input class="" type="text" name="icon_frame" value="">
        <input class="" type="text" name="user_name" value="<?php echo $row['user_name']?>">
    <?php } ?>
    </form>
</body>
</html>