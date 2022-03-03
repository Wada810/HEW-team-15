<?php
session_start();

if(isset($_POST) && $_POST['status'] == 'check'){

    // 指令書取得
    $db = new PDO('mysql:dbname = hew2022;host = localhost;charset = utf8' , 'root' , '');
    $result = $db->query("SELECT * FROM instraction WHERE user_id = " . $user_id . ";");
    $instraction_list = [];
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        $instraction_list = $row;
    }
    $db = null;
}






require_once './tpl/judge.php';
?>