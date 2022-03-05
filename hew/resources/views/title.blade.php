@extends("layouts.layout")

@section('css_link')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title', 'タイトル')

@section('body')
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
    <div class="l_title">
        <h1 class="p_title"><img src="img/3.svg" alt="algo"></h1>
        <a href="home" class="p_start alp_font">tap start</a>
    </div>
@endsection