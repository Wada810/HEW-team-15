<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("font_links")
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield("css_link")
    <title>algo - @yield("title")</title>
</head>
<body>
@yield("body")
</body>
</html>