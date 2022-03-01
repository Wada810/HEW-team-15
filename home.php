<?php 

/* ログインされていたら */
if(isset($_COOKIE['login_id'])){
    $login_id = $_COOKIE['login_id'];//クッキーで送られてきたログインID受け取る
    require_once 'const.php';

    /* データベースからニックネームを取ってくる */
    $db = new PDO('mysql:dbname=hew2022;host=localhost;charset=utf8','root','');

    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);

    $result = $db -> query("SELECT user_name FROM user WHERE id =  $login_id ; ");

    $list = [];
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        $list[] = $row ;
    }
    // $name = $list[0]['user_name'];  ←名前表示させるのであれば表示
    $img_file = '';//ユーザーが選択した画像src
    $db = null;
}
else{ //ログインされてなかったら
    // $name = 'ゲスト';  ←名前表示させるのであれば表示
    $img_file = 'img/guest.png';//ゲスト用の画像src
}


//遊び方を見るを押されたら
//ゲームで遊ぶを押されたら
//みんなの指示書を見るを遊ぶを押されたら
//プロフィールを押されたら






require_once 'tpl/home.php';
?>