<?php
session_start();
/* require_once 'const.php'; */

// ボタン判定
if(!empty($_POST) && $_POST['status'] == 'complete'){

    // DB格納
    $db = new PDO('mysql:dbname = hew2022;host = localhost;charset = utf8' , 'root' , '');
    $db->exec("INSERT INTO instraction (user_id,instraction,theme,like) VALUES (" . $user_id . "," . $instruction . "," . $theme . "," . $like . ");");
    $db = null;

    // 画面遷移
    header('location:./judge.php');
    exit;
}
elseif(!empty($_POST) && $_POST['status'] == 'back'){
    
    // 画面遷移
    header('location:./index.php');
    exit;
}


require_once './tpl/view_direction.php';
?>