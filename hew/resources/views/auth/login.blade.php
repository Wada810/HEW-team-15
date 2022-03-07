@extends("layouts.layout")

@section('css_link')
<!--     <link rel="stylesheet" href="{{ asset('css/projects/instraction.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/projects/login.css') }}">
@endsection

@section('title', 'ログイン')

@section('body')
<!-- ヘッダー -->
<header class="l_play_header p_play_header">
    <!-- 前のページへ戻るリンク -->
    <a href="{{ url()->previous()}}" class="p_play_header__back"><span class="material-icons-round">undo</span></a>
    <div class="p_play_header__title">
        <span>ログイン</span>
    </div>
</header>

<main>
    <div id="login_dev">
        <div name="logo">
            <a href="./">
                <h1 class="login_home_img_cover"><img class="login_home_img" src="img/3.svg" alt="algo"></h1>
            </a>
            <!-- title call -->
            <h1 class="title_call">ユーザーネームとパスワードを<br>入力してください</h1>
        </div>

        <!-- error zone -->
        <div class="error_zone">
            <x-auth-validation-errors class="error_msg" :errors="$errors" />
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Name -->
            <div class="name_cover input_cover">
                <x-label class="lavel" for="name" :value="__('ユーザーネーム')" />

                <input id="name" class="input" type="text" name="name" :value="old('name')" required autofocus >
            </div>

            <!-- Password -->
            <div class="pass_cover input_cover">
                <x-label class="lavel" for="password" :value="__('パスワード')" />

                <input id="pass" class="input"
                    type="password"
                    name="password"
                    required autocomplete="new-password">

                <span class="material-icons-round visibility_on_icon">visibility</span>
                <span class="material-icons-round visibility_off_icon">visibility_off</span>
            </div>

            <!-- Remember Me -->
            <div class="rem_cover">
                <label for="remember_me" class="">
                    <input id="" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('ログイン状態を保持する') }}</span>
                </label>
            </div>

            <div class="btn_cover">
                <button class="btn-primary btn">
                    {{ __('ログイン') }}
                </button>

                <a class="btn-secondary btn" href="{{ route('register') }}">
                    {{ __('新規登録') }}
                </a>
            </div>
        </form>
    </div>
</main>
<script src="{{ asset('js/password_hide.js') }}"></script>
@endsection