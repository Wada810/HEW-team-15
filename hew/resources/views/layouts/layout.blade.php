<!DOCTYPE html>
<html lang="ja" theme="<?php print $user["color"] ?? "";?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- アイコン -->
    <link rel="icon" href="{{ asset('favicon.ico')}}" />
    <link rel="apple-touch-icon" href="{{ asset('favicon.png')}}">

    @include("font_links")
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield("css_link")
    <title>algo - @yield("title")</title>
</head>
<body>
@yield("body")
</body>
</html>