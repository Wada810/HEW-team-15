@extends("layouts.layout")

@section('css_link')
<!--     <link rel="stylesheet" href="{{ asset('css/projects/instraction.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/projects/login.css') }}">
@endsection

@section('title', '新規登録')

@section('body')
<!-- ヘッダー -->
<header class="l_play_header p_play_header">
    <!-- 前のページへ戻るリンク -->
    <a href="{{ url()->previous()}}" class="p_play_header__back"><span class="material-icons-round">undo</span></a>
    <div class="p_play_header__title">
        <span>新規登録</span>
    </div>
</header>

<main>
    <div id="login_dev">
        <div name="logo">
            <a href="./">
                <h1 class="login_home_img_cover"><img class="login_home_img" src="img/3.svg" alt="algo"></h1>
            </a>
            <!-- title call -->
            <h1 class="title_call">アルゴに登録しよう！</h1>
        </div>

        <!-- error zone -->

        <!-- Validation Errors -->
        <div class="error_zone">
            <x-auth-validation-errors class="error_msg" :errors="$errors" />
        </div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="name_cover input_cover">
                <x-label class="lavel" for="name" :value="__('ユーザーネーム')" />

                <input id="name" class="input" type="text" name="name" :value="old('name')" onkeyup="StringCount('name', 'text_cnt1')" required autofocus >

                <div class="word_count"><p id="text_cnt1" class="now_word">0</p><p class="slash">/</p><p class="max_word">15</p></div>
            </div>

            <!-- Password -->
            <div class="pass_cover input_cover">
                <x-label class="lavel" for="password" :value="__('パスワード')" />

                <input id="password" class="input"
                    type="text"
                    name="password"
                    required autocomplete="new-password"
                    onkeyup="StringCount('password', 'text_cnt2')">

                <div class="word_count"><p id="text_cnt2" class="now_word">0</p><p class="slash">/</p><p class="max_word">15</p></div>
            </div>



            <div class="btn_cover">
                <button type="submit" class="btn-primary btn">
                    {{ __('新規登録') }}
                </button>

                <a class="btn-secondary btn" href="{{ route('login') }}">
                    {{ __('ログイン') }}
                </a>
            </div>
        </form>
    </div>
</main>
@endsection
