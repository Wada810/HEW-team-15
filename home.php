<?php 
// $loginid = $_COOKIE['loginid'];
require_once 'const.php';

/* データベースからニックネームを取ってくる */
$db = new PDO('mysql:dbname=hew2022;host=localhost;charset=utf8','root','');

$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

// $db->exec("INSERT INTO user ( email , user_name , hasehd_password ) VALUES ('bbb@gmail.com' , '春他郎' , 123 ) ; ");

$result = $db -> query("SELECT user_name FROM user WHERE id =  0/* $loginid */ ; ");

$list = [];
while($row = $result->fetch(PDO::FETCH_ASSOC)){
    $list[] = $row ;
}
if($list == []){
    $name = 'ゲスト';
}
else{
    foreach($list as $info){
        $name = $info['user_name'];
    }
}
var_dump($list);
$db = null;





/* ログインされていたら */

/* ログインされてなかったら */


require_once 'tpl/home.php';
?>