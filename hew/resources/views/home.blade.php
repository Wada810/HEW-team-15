@extends("layouts.layout")

@section('css_link')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title', 'ホーム')

@section('body')
    <div class="l_home">
        <header class="l_home_header">
            <a href="" class="btn s">お問い合わせ</a>
            @if (Route::has('login'))
                @auth
                    <a href="mypage" class="p_home_user_icon">
                        <img src="" alt="">
                        <p>プロフィール</p>
                    </a>
                @endauth
            @endif
        </header>
        <div class="l_home_culumn">
            <h1 class="p_home_logo"><img src="img/3.svg" alt="algo"></h1>
            @if (Route::has('login'))
                @auth
                    <a href="" class="p_home_link">あたらしく作る</a>
                    <a href="" class="p_home_link">みんなの指示書をみる</a>
                    <a href="" class="p_home_link">あそびかた</a>
                @else
                    <a href="{{ route('login') }}" class="p_home_link">ログイン</a>
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="p_home_link">新規登録</a>
                    @endif
                @endauth
            @endif
        </div>
        <footer>
            <address class="s alp_font">&copy; 2022 algo.</address>
            <div class="version alp_font">v1.0</div>
        </footer>
    </div>
@endsection