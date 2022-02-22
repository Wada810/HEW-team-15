<?php
require_once "./const.php";
$err = "";
//ログイン
if(isset($_REQUEST["state"]) && $_REQUEST["state"] == "login"){
    //db接続
    $db = new PDO('mysql:dbname=' . DB_NAME . ';host=' . HOST . ';charset=utf8',"" . USER_ID . "","" . PASSWORD . "");

    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

    $stmt = $db->prepare('SELECT id FROM user WHERE email = :email');

    $stmt->bindParam(':email', $email, PDO::PARAM_STR);

    $email = $_REQUEST["email"];

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if($result == false){
        //実行エラー
        echo "実行エラー";
        exit;
    }elseif($result->num_rows == 0){
        $err = "メールアドレス又はパスワードが間違っています。";
        require_once "./tpl/sign_in.php";
        exit;
    }

    if(password_verify($_REQUEST['pass'], $result['password'])){
        echo "ログイン認証に成功しました";
        // $expire = time() + (60 * 60 * 24 * 14);
        // setcookie("login_id",mysqli_fetch_assoc($result)["id"],$expire);
        // mysqli_close($link);
        // header("location: home.php");
        exit;
    }else{
        echo "ログイン認証に失敗しました";
        exit;
    } 

}
require_once "./tpl/sign_in.php";
?>