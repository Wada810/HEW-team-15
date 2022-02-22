<?php
require_once "./const.php";

$link = mysqli_connect( HOST , USER_ID , PASSWORD , DB_NAME );
mysqli_set_charset($link,'utf8');

$sql = "SELECT * FROM user WHERE id = 1";
$result = mysqli_query($link,$sql);

$list = [];
while($row = mysqli_fetch_assoc($result)){
    $list[] = $row;
}



require_once "tpl/profile.php";
?>