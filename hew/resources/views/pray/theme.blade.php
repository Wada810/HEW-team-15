@extends("layouts.layout")

@section('title', 'テーマを決めよう')

@section('body')

<header class="l_pray_header p_pray_header">
    <a href="{{ route('home') }}" class="p_pray_header__back"><span class="material-icons-round">undo</span></a>
    <div class="p_pray_header__title">
        <span class="material-icons-round">library_books</span>
        <span>指令の登録</span>
    </div>
</header>
<div class="l_pray_header__spacer"></div>

<form action="" method="get">
    @csrf
    <main class="l_theme_main">
        <div class="l_theme_main__title p_theme_main">
            <h1>テーマを決めよう!!</h1>
            <p>30文字以内</p>
        </div>
        <div class="p_theme_input">
            <input type="text" id="input_theme" class="input-text" maxlength="30" placeholder="テーマをいれてね">
            <div class="p_theme_input__letter_counter"><span id="strLen">0</span>/30</div>
        </div>
        <button class="btn-primary">次へ</button>
    </main>
</form>

<script src="{{ asset('js/text_count.js') }}"></script>
@endsection