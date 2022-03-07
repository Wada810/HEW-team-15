@extends("layouts.layout")

@section('css_link')
<!-- 個別のｃｓｓがあったらここに -->
<!-- <link rel="stylesheet" href="{{ asset('css/フォルダ名') }}"> -->
<link rel="stylesheet" href="{{ asset('css/projects/friend_prof.css') }}">
@endsection

@section('title', 'ともだちのマイページ')

@section('body')
<!-- ここにhtml -->
    <!-- ヘッダー -->
    <header class="l_play_header p_play_header">
        <!-- 前のページへ戻るリンク -->
        <a href="{{ url()->previous()}}" class="p_play_header__back"><span class="material-icons-round">undo</span></a>
        <div class="p_play_header__title">
            <span>ともだちのマイページ</span>
        </div>
    </header>

    <main>
        <form action="" method="POST">
        <div id="nomal">
            <div id="prof">
                <div class="prof_area">
                    <div class="prof_cover">
                        <div class="rank_cover"><div class="rank_block"><p class="rank">RANK</p><p class="rank_no">{{$friend_prof['level']}}</p></div></div>
                        <img class="prof_img" src="image/ {{$friend_prof['icon_image']}}" alt="プロフ画像">
                    </div>
                    <p class="name">プロフ太郎</p>
                    <div class="star_cover">
                        <div class="friend_get_star_cover get_star_cover">
                            <span class="material-icons-round">stars</span>
                            <span class="get_star_num">{{$friend_star}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="todo">
                <div class="todo_sort_cover">
                    <div class="text-divider"><p class="todo_title">作ったやることリスト</p></div>
                    <div class="item_list">
                        <div class="lines_num_cover"><span class="material-icons-round lines_icon line_num_icon">library_books</span><p class="line_num">13</p></div>
                        <div class="sort_cover"><p class="sort">ソート:</p><p class="sort_seed">新しい順</p><span class="material-icons-round drop_arrow">arrow_drop_down_circle</span></div>
                    </div>
                </div>
                <div class="todo_scroll">
                    <div class="todo_list_cover">
                        @foreach($friend_inst as $key => $value)
                        <div class="todo_list"><div class="top"><p class="todo_theme">{{$value['theme']}}</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="cross">×</p><p class="lines">{{$value['lines']}}</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="cross">×</p><p class="fav">{{$value['likes']}}</p></div><div class="data">{{$value['updated_at']}}</div></div></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- prof.modal -->
        <div id="release_modal">
            <div class="release_modal">
                <div class="release_cover">
                    <div class="modal_prof_img_area">
                        <div class="modal_rank_area"><div class="modal_rank_cover"><p class="modal_rank">RANK</p><p class="modal_rank_sum">97</p></div></div>
                        <img class="modal_prof_img" src="" alt="">
                    </div>
                    <div class="modal_top">
                        <div class="modal_close"><span class="material-icons-round modal_close_icon">cancel</span></div>
                        <div class="modal_user_name"><p class="modal_name">SUPER_NENECHI</p></div>
                        <div class="modal_half"><div class="modal_fav_cover"><span class="material-icons-round moda_fav_icon">stars</span><p class="modal_sums">278</p></div></div>
                        <div class="modal_theme_cover"><p class="modal_theme">構成成分は「水35ℓ、炭素20kg、アンモニア4ℓ、石</p></div>
                    </div>
                    <div class="modal_under">
                        <div class="modal_items">
                            <div class="modal_lines_cover">
                                <span class="material-icons-round modal_lines_icon">format_list_numbered</span>
                                <p class="cross">×</p>
                                <p class="modal_lines">13</p>
                            </div>
                            <div class="modal_date_cover">
                                <span class="material-icons-round modal_calendar_icon">event</span>
                                <div class="modal_date"><p class="modal_year">2022</p><p class="modal_slash">/</p><p class="modal_month">02</p><p class="modal_slash">/</p><p class="modal_day">23</p></div>
                                <div class="modal_time"><p class="modal_hour">23</p><p class="modal_dott">:</p><p class="modal_minutes">11</p></div>
                            </div>
                        </div>
                        <div class="modal_button_cover">
                            <div class="modal_button modal_play_btn"><span class="material-icons-round modal_play_icon">play_circle</span><p class="modal_play_p">あそぶ</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script src="{{ asset('js/friends_prof.js') }}"></script>
@endsection