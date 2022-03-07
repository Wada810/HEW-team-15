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
        <div class="profile_area">
            <div class="profile_wrap">
                <a class="profile_modal_top">
                    <div class="profile_rank_tag">
                        <div class="profile_rank_str">RANK</div>
                        <div class="profile_rank_int">{{$user["level"]}}</div>
                    </div>
                    <div class="profile_img">
                        <img src="{{ asset('./img/kuma.png')}}" alt="">
                    </div>
                </a>
                <div class="close-btn" id="close-btn"><span class="material-icons-round">close</span></div>
                <div class="profile_modal_main">
                    <div class="profile_modal_info">
                        <h2>HYPERウンチMAN</h2>
                        <div class="star_point_content">
                            <span class="material-icons-round">stars</span>
                            <p>278</p>
                        </div>
                    </div>
                    <div class="profile_modal_todo">
                        <div class="profile_theme"></div>
                        <div class="profile_icon_container">
                            <div class="rows">
                                <span class="material-icons-round">format_list_numbered_rtl</span>
                                <p>x 18</p>
                            </div>
                            <div class="date">
                                <span class="material-icons-round">calendar_today</span>
                                <p>2022/02/13</p>
                            </div>
                        </div>
                        <button type=""><span class="material-icons-round">play_circle</span><span class="play">あそぶ</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="black-background" id="black-bg"></div>
</section>

<div class="header"></div><!-- 仮ヘッダー -->

<!-- 検索バーと表示順ソート -->
<div class="search_sort_content">
    <div class="search_sort_flex">
        <form class="search_div" method="POST" action="{{ ('public_instractions')}}">
            <input placeholder="キーワードを入力" name=""  type="text">
            <button><span class="material-icons-round search_icon">search</span></button>
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
        <p class="search_num">検索件数:129件</p>

        @-foreach($instractions as $value)
        <div class="public_list">
            <!-- 友だちのマイページ画面へ飛ぶ -->
            <div class="profile_wrap">
                <div class="profile_icon_name">
                    <div class="friend_icon">
                        <a href="#"><img src="{{ asset('./img/kuma.png')}}" alt="友だちのアイコン"></a>
                    </div>
                    <div class="friend_name">
                        <a href="#"><span class="material-icons-round friendname_stars">stars</span></a>
                    </div>
                </div>
            </div>

            <div class="todo_list open-btn">
                <p class="theme">{{$value["theme"]}}</p><!-- 長い文章でも検証すること -->
                <div class="icons_flex">
                    <div class="icon_items">
                        <p><span class="material-icons-round row_icon">format_list_numbered_rtl</span>{{$value["rows"]}}</p>
                        <p><span class="material-icons-round stars_icon">stars</span>{{$value["stars"]}}</p>
                    </div>
                    <p class="data">{{$value["data"]}}</p>
                </div>
            </div>
        </div>
        @-endforeach
    </div>
<script src="{{ asset('js/profile_modal.js') }}"></script>
@endsection