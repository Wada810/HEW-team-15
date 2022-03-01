<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
            <a href="{{ url('/mypage') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">マイページ</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button>ログアウト</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ログイン</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">新規登録</a>
            @endif
        @endauth
    </div>
@endif

<div>
    <a href="pray">あそぶ</a><br>
    <a href="seach">さがす</a>
</div>
</body>
</html>