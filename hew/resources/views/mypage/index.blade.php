<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="home">home</a>
<form action="logout" method="post">
    @csrf
    <button>ログアウト</button>
</form>
<div>username:{{$user["name"]}}</div>
<div>level:{{$user["level"]}}</div>
<div>exp:{{$user["total_exp"]}}</div>
<div>icon:{{$user["icon_image"]}}</div>
</body>
</html>