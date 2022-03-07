@extends("layouts.layout")

@section('css_link')
@endsection

@section('title', 'ホーム')

@section('body')
    <div class="l_home">
        <header class="l_home_header">
            <!-- <a href="" class="inquery_btn s">お問い合わせ</a> -->
            <p></p>
            @if (Route::has('login'))
                @auth
                    <a href="mypage" class="p_home_user_icon">
                        <img src="{{asset('img/' . $user['icon_image'])}}" alt="">
                        <p>{{$user["name"] ?? ""}}</p>
                    </a>
                @endauth
            @endif
        </header>
        <div class="l_home_culumn">
            <h1 class="p_home_logo">@include("logo")</h1>
            @if (Route::has('login'))
                @auth
                    <a href="{{ route('theme') }}" class="p_home_link">あたらしく作る</a>

                    <a href="{{ route('public_instractions') }}" class="p_home_link">みんなの指示書をみる</a>

                    <a href="{{route('how_to_play')}}" class="p_home_link">あそびかた</a>

                @else
                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn-primary mb-s">新規登録</a>
                    @endif
                    <a href="{{ route('login') }}" class="btn-secondary">ログイン</a>
                @endauth
            @endif
        </div>
        <footer class="p_footer">
            <address class="s alp_font">&copy; 2022 algo.</address>
            <div class="version alp_font">v1.0</div>
        </footer>
    </div>
@endsection