@extends("layouts.layout")

@section('css_link')
<!-- cssリセットCDN -->
<link rel="stylesheet" href="{{asset('https://unpkg.com/ress/dist/ress.min.css')}}">
<link rel="stylesheet" href="{{asset('css/projects/public_instractions.css')}}">
<link rel="stylesheet" href="{{asset('css/projects/public_instractions_modal.css')}}">
@endsection

@section('title', 'ホーム')

@section('body')
<header class="l_play_header p_play_header">
    <a href="{{ route('theme') }}" class="p_play_header__back"><span class="material-icons-round">undo</span></a>
    <div class="p_play_header__title">
        <span>みんなのやることリスト</span>
    </div>
</header>
<div class="l_play_header__spacer"></div>
<section class="profile_modal" id="profile_modal">

</section>

<div class="header"></div><!-- 仮ヘッダー -->

<!-- 検索バーと表示順ソート -->
<div class="search_sort_content">
    <div class="search_sort_flex">
        <form class="search_div" method="POST" action="{{ route('public_instractions')}}">
        @csrf
            <input placeholder="キーワードを入力" name="search"  type="text">
            <button type="submit"><span class="material-icons-round search_icon">search</span></button>

        </form>

        <!-- セレクトで動かすのか？それ以外の何かで動かすのか？ -->
        <div class="sort_area">
            <div class="sort_content">
                <p class="sort_item">おすすめ順<span class="material-icons-round">arrow_drop_down_circle</span></p>
            </div>
        </div>
    </div>
</div>

    <div class="content_box">
        <!-- 検索件数 -->
        <p class="search_num">検索件数:{{$search}}件</p>

        @foreach($instractions as $key => $value)
        <div class="public_list">
            <!-- 友だちのマイページ画面へ飛ぶ -->
            <div class="profile_wrap">
                <div class="profile_icon_name">
                    <div class="friend_icon">
                        <a href="{{route('friend_prof')}}"><img src="{{ asset('./img/kuma.png')}}" alt="友だちのアイコン"></a>
                        <a href="#"><img src="{{ asset('./img/kuma.png')}}" alt="友だちのアイコン"></a>

                    </div>
                    <div class="friend_name" id="{{$value['i_id']}}">
                        <a class="get_id" id="{{$value['id']}}" href="#">{{$value['name']}}<span class="material-icons-round friendname_stars">stars</span></a>
                    </div>
                </div>
            </div>

            <div class="todo_list open-btn">
                <p class="theme">{{$value["theme"]}}</p><!-- 長い文章でも検証すること -->
                <div class="icons_flex">
                    <div class="icon_items">
                        <p><span class="material-icons-round row_icon">format_list_numbered_rtl</span>{{$value["lines"]}}</p>
                        <p><span class="material-icons-round stars_icon">stars</span>{{$value["likes"]}}</p>
                    </div>
                    <p class="data">{{$value["updated_at"]}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    const user = <?php print json_encode($user)?>;
    const friendProf_url = "{{route('friendProf')}}";
</script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/profile_modal.js') }}"></script>
@endsection