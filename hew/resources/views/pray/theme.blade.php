@extends("layouts.layout")

@section('title', 'お題を決めよう')

@section('body')

<header class="l_pray_header p_pray_header">
    <a href="{{ route('home') }}" class="p_pray_header__back"><span class="material-icons-round">undo</span></a>
    <div class="p_pray_header__title">
        <span class="material-icons-round">library_books</span>
        <span>お題を登録</span>
    </div>
</header>
<div class="l_pray_header__spacer"></div>

<form action="{{ route('order') }}" method="get">
    @csrf
    <main class="l_theme_main">
        <div class="l_theme_main__title p_theme_main">
            <h1>お題を決めよう!!</h1>
            <p>30文字以内</p>
        </div>
        <div class="p_theme_input">
            <input type="text" name="theme" id="input_theme" class="input-thick" maxlength="30" placeholder="お題をいれてね" required>
            <div class="p_theme_input__letter_counter"><span id="strLen">0</span>/30</div>
        </div>
        <button class="btn-primary">次へ</button>
    </main>
</form>

<script src="{{ asset('js/text_count.js') }}"></script>
@endsection