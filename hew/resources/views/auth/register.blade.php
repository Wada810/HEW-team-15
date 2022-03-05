@extends("layouts.layout")

@section('css_link')
    <link rel="stylesheet" href="{{ asset('css/projects/instraction.css') }}">
@endsection

@section('title', 'やることリスト')

@section('body')

<!-- ヘッダー -->
<header class="l_play_header p_play_header">
    <!-- 前のページへ戻るリンク -->
    <a href="{{ route('order') }}" class="p_play_header__back"><span class="material-icons-round">undo</span></a>
    <div class="p_play_header__title">
        <span>新規登録</span>
    </div>
</header>

<main>
    <div id="login_dev">
        <div name="logo">
            <a href="./">
                <h1 class="log_p_home_logo"><img src="img/3.svg" alt="algo"></h1>
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

                <input id="name" class="log_input" type="text" name="name" :value="old('name')" required autofocus >

                <div class="word_count"><p class="now_word">0</p><p class="slash">/</p><p class="max_word">15</p></div>
            </div>

            <!-- Password -->
            <div class="pass_cover input_cover">
                <x-label class="lavel" for="password" :value="__('パスワード')" />

                <input id="pass" class="log_input"
                    type="text"
                    name="password"
                    required autocomplete="new-password">

                <div class="word_count"><p class="now_word">0</p><p class="slash">/</p><p class="max_word">15</p></div>
            </div>

            <!-- Remember Me -->
            <div class="rem_cover">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('ログイン状態を保持する') }}</span>
                </label>
            </div>

            <div class="btn_cover">
                <button type="submit" class="button reg_btn">
                    {{ __('新規登録') }}
                </button>

                <a class="button log_btn" href="{{ route('login') }}">
                    {{ __('ログイン') }}
                </a>
            </div>
        </form>
</div>
</main>
@endsection
