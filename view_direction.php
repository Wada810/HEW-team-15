<?php
session_start();
require_once 'const.php';

// ボタン判定
if(isset($_POST) && $_POST['status'] == 'complete'){

    // 画面遷移
    header('location:./judge.php');
    exit;
}
elseif(isset($_POST) && $_POST['status'] == 'back'){
    
    // 画面遷移
    header('location:./');
    exit;
}






?>