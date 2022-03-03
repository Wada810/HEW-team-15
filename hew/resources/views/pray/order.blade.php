@extends("layouts.layout")

@section('title', 'やることリストを作ろう!')

@section('body')

<header class="l_pray_header p_pray_header">
    <a href="{{ route('theme') }}" class="p_pray_header__back"><span class="material-icons-round">undo</span></a>
    <div class="p_pray_header__title">
        <span class="material-icons-round">library_books</span>
        <span>やることリストを登録</span>
    </div>
</header>
<div class="l_pray_header__spacer"></div>

<div class="theme_title">theme</div>
<div class="theme_title__spacer"></div>


<section class="l_algorithm">

    <ol class="algorithm_list"  id="order_list"></ol>

    <form action="{{ route('order') }}" id="order_form" method="get">
        @csrf
    </form>
</section>


<section class="algorithm_form">
    <div class="algorithm_add_textbox"><input type="text" class="input" placeholder="やることを入力" id="order_input"></div>
    <div class="algorithm_add_button"><span class="material-icons-round">outbound</span></div>
</section>

<script src="{{ asset('js/Sortable-master/Sortable.min.js') }}"></script>
<script src="{{ asset('js/order_function.js') }}" ></script>
<script src="{{ asset('js/order.js') }}"></script>
@endsection
