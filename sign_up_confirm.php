<?php
require_once "./const.php";
session_start();
//確認ボタンで来てない場合タイトルに戻す
if(!isset($_SESSION["state"]) || $_SESSION["state"] !== "sign_up_confirm"){
    header("location: title.php");
    exit;
}
//修正ボタンが押されたとき
if(isset($_REQUEST["submit"]) && $_REQUEST["submit"] == "back"){
    $_SESSION["state"] = "sign_up_back";
    header("location: sign_up.php");
    exit;
}
$data = $_SESSION["sign_up_data"];
//登録ボタンが押されたとき
if(isset($_REQUEST["submit"]) && $_REQUEST["submit"] == "register"){
    //DB接続
    $db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8',"" . USER_ID . "","" . PASSWORD . "");

    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

    $stmt = $db->prepare("INSERT INTO user ( email , user_name , hasehd_password )
     VALUES (:email, :user_name, :hasehd_password)");

    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':user_name', $user_name, PDO::PARAM_STR);
    $stmt->bindParam(':hasehd_password', $hasehd_password, PDO::PARAM_STR);

    $email = $data["email"]["value"];
    $user_name = $data["user_name"]["value"];
    $hasehd_password = password_hash($data["password"]["value"], PASSWORD_DEFAULT);

    $stmt->execute();
    $db = null;

    // SESSION削除
    unset($_SESSION["state"]);
    unset($_SESSION["sign_up_data"]);
    header("location: sign_up_complete.php");
    exit;
}
require_once "./tpl/sign_up_confirm.php";
?>