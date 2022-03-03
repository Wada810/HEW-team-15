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

<div class="p_theme_title">theme</div>
<div class="p_theme_title__spacer"></div>

<section class="l_algorithm">
    <!-- <p class="p_algorithm_head">アルゴリズム</p> -->
    <ol class="p_algorithm_list">
        <li class="p_algorithm_list__item">
            <div class="p_algorithm_number">1.</div>
            <div class="p_algorithm_contents"><p class="algorithm_name">パンを2まいとる</p><div class=""></div></div>
        </li>
        <li class="p_algorithm_list__item">
            <div class="p_algorithm_number">4.</div>
            <div class="p_algorithm_contents is-active">
                <p class="algorithm_name">ピーナッツバターをぬるピーナッツバターをぬる</p>
                <div class="material_items">
                    <button><span class="material-icons-round delete">delete</span>削除</button>
                    <button><span class="material-icons-round border">border_color</span>編集</button>
                </div>
            </div>
        </li>
    </ol>
    <form action="{{ route('order') }}" method="get">
        @csrf
        <button class="btn-primary">完成!!</button>
    </form>
</section>


<section class="p_algorithm_form">
    <div class="p_algorithm_add_textbox"><input type="text" class="input" placeholder="やることを入力"></div>
    <div class="p_algorithm_add_button"><span class="material-icons-round">outbound</span></div>
</section>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/Sortable-master/Sortable.min.js') }}"></script>
<script src="{{ asset('js/function.js') }}" ></script>
<script src="{{ asset('js/test.js') }}"></script>
@endsection
