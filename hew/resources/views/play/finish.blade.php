@extends("layouts.layout")

@section('css_link')
    <link rel="stylesheet" href="{{ asset('css/projects/reward_friend.css') }}">
@endsection

@section('title', 'おわり！')

@section('body')

<!-- ヘッダー -->
<header class="l_play_header p_play_header">
    <div class="p_play_header__title">
        <span class="material-icons-round">library_books</span>
        <span>リワード</span>
    </div>
</header>
<div class="l_play_header__spacer"></div>
<!-- コンテンツ -->
<main class="l_finish">
    <div class="congrat alp_font">CONGRATULATION!!</div>
    <div class="user_icon">
        <img src="{{asset('img/' . $user['icon_image'])}}" alt="">
    </div>
    <div class="user_name">{{$user["name"]}}</div>
    <section class="level_wrapper">
        <p class="next_level">NEXT RANK:<span>{{$user["level"] + 1}}</span></p>
        <div class="level_box">
            <div class="animation-box">
                <div class="animation"></div>
            </div>
        </div>
        <div class="rank_point">
            <p class="left_rank_point">{{$user["total_exp"]}}</p><p class="center_rank_point">/</p><p class="right_rank_point">{{$user["next"]}}</p>
        </div>
    </section>

    <form method="post" id="form">
    @csrf
        <div class="public_setting">
            <div class="public_text">みんなにやることリストを<br>公開しよう</div>
            <div class="public_radio" id="public_button">
                <span class="material-icons-round">public</span>
                <span>公開</span>
                <span class="radio_btn"></span>

                <input id="public_radio" type="radio" name="public" value="true">
            </div>
            <div class="public_radio" id="unpublic_button">
                <span class="material-icons-round">public_off</span>
                <span>非公開</span>
                <span class="radio_btn radio_btn_active"></span>
                <input id="unpublic_radio" type="radio" name="public" value="false" checked>
            </div>
        </div>
        <div class="end_game">
            <button class="btn-primary" id="end_game_button" disabled>ゲーム終了</button>
        </div>
    </form>
</main>

<!-- レベルアップモーダル -->
<section class="level_up_modal hidden">
    <div class="level_up_window_box">
        <div class="level_up_window">
            <p class="level_up_text alp_font"><span>Level Up!</span></p>
            <p class="level_progress">
                <span class="privious">{{$user["level"]}}</span>
                <span class="material-icons-round arrow">keyboard_double_arrow_right</span>
                <span class="current">{{$user["level"] + 1}}</span>
            </p>
            @if(count($colors) >= 1 || count($icons) >= 1)
            <p class="reward_text">手に入れたよ!!</p>
            <div class="rewards">
                @foreach($colors as $val)
                <div>
                    <div class="reward_item color_item {{$val['name']}}">

                    </div>
                    <p class="reward_name">{{$val["jp_name"]}}</p>
                </div>
                @endforeach
                @foreach($icons as $val)
                <div>
                    <div class="reward_item color_item {{$val['name']}}">
                        <img src="{{asset('img/' . $val['path'])}}" alt="">
                    </div>
                    <p class="reward_name">{{$val["jp_name"]}}</p>
                </div>
                @endforeach
            </div>
            @endif
            <div class="close_level_up alp_font">OK</div>
        </div>
    </div>
</section>

<!-- 評価モーダル -->
<section class="profile_modal hidden" id="rate_modal">
    <div class="profile_area">
        <div class="profile_wrap">
            <a class="profile_modal_top">
                <div class="profile_img">
                    <img src="https://placehold.jp/500x500.png" alt="ともだちのアイコン">
                </div>
            </a>
            <div class="profile_modal_main">
                <div class="profile_modal_info">
                    <h2>username</h2>
                </div>
                <div class="profile_theme">theme</div>
                <div class="star_point_wrapp">
                    <div class="star_point_content">
                        <span class="material-icons-round">stars</span>
                        <p id="star_num"><!--いいね数変数--></p>
                    </div>
                </div>
                <div class="profile_modal_todo">
                    <div class="profile_modal_cover">
                        <div class="btn_content">
                            <p>評価をつけよう!!</p>
                            <div id="starBtnId" class="btn_wrapp star_btn">
                                <div class="btncover star_icon_cover"><span class="material-icons-round">stars</span></div>
                                <p>いいね！</p>
                            </div>
                        </div>
                        <!-- <div class="btn_wrapp">
                            <div class="btncover share_icon_cover"><span class="material-icons-round">share</span></div>
                            <p>シェア</p>
                        </div>     -->
                    </div>
                    <div class="close-btn" id="close-btn"><span class="material-icons-round">close</span></div>
                    <input type="checkbox" for="form" id="like" name="like" value="true" class="hidden">
                </div>
            </div>
        </div>
    </div>
    <div class="black-background" id="black-bg"></div>
</section>
<script>
    const user = <?php print json_encode($user)?> ;
</script>
<script src="{{ asset('js/finish.js') }}"></script>
@endsection
