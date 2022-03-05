@extends("layouts.layout")

@section('title', 'お題を決めよう')

@section('body')

<header class="l_play_header p_play_header">
    <a href="{{ route('home') }}" class="p_play_header__back"><span class="material-icons-round">undo</span></a>
    <div class="p_play_header__title">
        <span class="material-icons-round">library_books</span>
        <span>お題を登録</span>
    </div>
</header>
<div class="l_play_header__spacer"></div>

<form method="post">
    @csrf
    <main class="l_theme_main">
        <div class="l_theme_main__title p_theme_main">
            <h1>お題を決めよう!!</h1>
            <p>30文字以内</p>
        </div>
        <div class="p_theme_input">
            <textarea type="text" cols="100" rows="1" name="theme" id="input_theme" class="input-thick" maxlength="30" placeholder="お題をいれてね" required>{{$data["theme"] ?? ""}}</textarea>
            <div class="p_theme_input__letter_counter"><span id="strLen">0</span>/30</div>
        </div>
        <button class="btn-primary">次へ</button>
    </main>
</form>

<script src="{{ asset('js/text_count.js') }}"></script>
@endsection