@extends("layouts.layout")

@section('title', 'やることリストを作ろう!')

@section('body')

<header class="l_play_header p_play_header">
    <a href="{{ route('theme') }}" class="p_play_header__back"><span class="material-icons-round">undo</span></a>
    <div class="p_play_header__title">
        <span class="material-icons-round">library_books</span>
        <span>やることリストを登録</span>
    </div>
</header>
<div class="l_play_header__spacer"></div>
<div class="theme_title">{{$data["theme"] ?? ""}}</div>
<div class="theme_title__spacer"></div>


<section class="l_algorithm">

    <ol class="algorithm_list"  id="order_list">
    </ol>

    <div class="p_button_box">
        <form id="order_form" method="post">
            @csrf
        </form>
    </div>
</section>


<section class="algorithm_form">
    <div class="algorithm_add_textbox"><input type="text" class="input" placeholder="やることを入力" id="order_input"></div>
    <div class="algorithm_add_button"><span class="material-icons-round">outbound</span></div>
</section>
<script>const order_json = <?php print json_encode($data["order"]);?></script>
<script src="{{ asset('js/Sortable-master/Sortable.min.js') }}"></script>
<script src="{{ asset('js/order_function.js') }}" ></script>
<script src="{{ asset('js/order.js') }}"></script>
@endsection
