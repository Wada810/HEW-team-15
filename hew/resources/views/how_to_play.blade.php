@extends("layouts.layout")

@section('css_link')
    <link rel="stylesheet" href="{{ asset('css/how_to_play.css') }}">
@endsection

@section('title', '遊び方')
    <header class="l_home_header">
        <p></p>
        <a href="{{ url()->previous()}}" class="p_play_header__back"><span class="material-icons-round">undo</span></a>
    </header>
@section('body')
@endsection