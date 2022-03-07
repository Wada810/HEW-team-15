@extends("layouts.layout")

@section('css_link')
<link rel="stylesheet" href="{{asset('css/projects/mypage.css')}}">
@endsection

@section('title', 'マイページ')

@section('body')
<form action="logout" method="post" id="logout">
    @csrf
</form>
<header class="l_play_header p_play_header">
    <a href="{{ url()->previous()}}" class="p_play_header__back"><span class="material-icons-round">undo</span></a>
    <button class="logout" form="logout"><span class="material-icons-round">logout</span></button>
    <div class="p_play_header__title">
        <span>マイページ</span>
    </div>
</header>
<div class="l_play_header__spacer"></div>
<main>
    <div id="prof">
        <div class="pattern_cover" id="modalOpen"><div class="palette_cover"><span class="material-icons-round palette">palette</span></div><p class="pattern">パターン変更</p></div>
        <div class="prof_area">
            <div class="prof_cover">
                <div class="rank_cover"><div class="rank_block"><p class="rank">RANK</p><p class="rank_no">{{$user["level"]}}</p></div></div>
                <img class="prof_img" src="{{asset('img/' . $user['icon_image'])}}" alt="プロフ画像">
                <div class="edit_cover" id="modalOpenIcon"><span class="material-icons-round edit">edit</span></div>
            </div>
            <p class="name">{{$user["name"]}}</p>
            <!-- <div class="rank_bar_cover"><div class="rank_bar_tank"><div class="rank_bar"></div></div> -->
            <!-- レベルメーター -->
            <div class="level_box">
                <div class="animation-box"><div class="animation"></div></div>
            </div>
            <div class="rank_point">
                <p class="left_rank_point">{{$user["total_exp"]}}</p><p class="center_rank_point">/</p><p class="right_rank_point">{{$user["next"]}}</p>
            </div>
            <div class="get_star_cover">
                <span class="material-icons-round">stars</span>
                <span class="get_star_num">{{$favs}}</span>
            </div>
        </div>
    </div>
    <div id="todo">
        <div class="todo_sort_cover">
            <div class="text-divider"><p class="todo_title">作ったやることリスト</p></div>
            <div class="sort_cover"><p class="sort">ソート:</p><select class="sort_table" name='sort'><option value="updated_at" class="sort_seed">新しい順</option><option value="likes" class="sort_seed">いいね順</option><option value="lines" class="sort_seed">行数順</option></select><span class="material-icons-round drop_arrow">arrow_drop_down_circle</span></div>
        </div>
        <div class="todo_scroll">
            <div class="todo_list_cover">
<<<<<<< HEAD
                @foreach($instraction as $key => $value)
                <div class="todo_list"><div class="top"><p class="todo_theme">{{$value['theme']}}</p></div><div class="under"><div class="lines_cover"><span class="material-icons-round lines_icon">format_list_numbered</span><p class="cross">×</p><p class="lines">{{$value['lines']}}</p></div><div class="fav_cover"><span class="material-icons-round fav_icon">stars</span><p class="cross">×</p><p class="fav">{{$value['likes']}}</p></div><div class="data">{{$value['updated_at']}}</div></div></div>
=======
                @foreach($instractions as $val)
                <div class="todo_list">
                    <div class="top">
                        <p class="todo_theme">{{$val["theme"]}}</p>
                        <div class="todo_public_setting">@if($val['is_shared'] == 1)<span class="material-icons-round on">public</span>@else<span class="material-icons-round off">public_off</span>@endif</div>
                    </div>
                    <div class="under">
                        <div class="lines_cover">
                            <span class="material-icons-round lines_icon">format_list_numbered</span>
                            <p class="cross">×</p>
                            <p class="lines">{{$val["lines"]}}</p>
                        </div>
                        <div class="fav_cover">
                            <span class="material-icons-round fav_icon">stars</span>
                            <p class="cross">×</p>
                            <p class="fav">{{$val["likes"]}}</p>
                        </div>
                        <div class="data">
                            <p>{{substr($val["created_at"],0,10)}}</p>
                        </div>
                    </div>
                </div>
>>>>>>> dev_user_class
                @endforeach
            </div>
        </div>
    </div>
    <!-- modal -->
    <!-- パターン変更 -->
    <div class="popup" id="js-popup">
        <div class="popup-inner">
            <div class="popup_header">カラーパターン</div>
                <div class="modal_items">
                    @foreach($colors as $val)
                    <div class="color_change_button" id="{{$val['name']}}">
                        <div class="color_item {{$val['name']}}"></div>
                        <p>{{$val['jp_name']}}</p>
                    </div>
                    @endforeach
                </div>
                <button id="js-close-btn">OK</button>
            </div>
        <div class="black-background" id="js-black-bg"></div>
    </div>
    <!-- アイコン変更 -->
    <div class="popup" id="js-popup-2">
        <div class="popup-inner">
            <div class="popup_header">プロフィールアイコン</div>
                <div class="modal_items_icon">
                    @foreach($icons as $val)
                        @if($val['path'] == $user['icon_image'])
                            <div class="icon_btn active_icon" id="{{$val['name']}}">
                                <div class="icon_cover">
                                    <img class="icon_img" src="{{asset('img/' . $val['path'])}}" alt="プロフ画像">
                                </div>
                                <p>{{$val["jp_name"]}}</p>
                            </div>
                        @else
                            <div class="icon_btn" id="{{$val['name']}}">
                                <div class="icon_cover">
                                    <img class="icon_img" src="{{asset('img/' . $val['path'])}}" alt="プロフ画像">
                                </div>
                                <p>{{$val["jp_name"]}}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
                <button id="js-close-btn-2">OK</button>
            </div>
        <div class="black-background" id="js-black-bg-2"></div>
    </div>

        <!-- prof.modal -->
        <div id="release_modal">
            <div class="release_modal">
                <div class="release_cover">
                    <div class="modal_prof_img_area">
                        <div class="modal_rank_area"><div class="modal_rank_cover"><p class="modal_rank">RANK</p><p class="modal_rank_sum">{{$user["level"]}}</p></div></div>
                        <img class="modal_prof_img" src="{{asset('img/' . $user['icon_image'])}}" alt="">
                    </div>
                    <div class="modal_top">
                        <div class="modal_close"><span class="material-icons-round modal_close_icon">cancel</span></div>
                        <div class="modal_user_name"><p class="modal_name">{{$user['name']}}</p></div>
                        <div class="modal_half"><div class="modal_fav_cover"><span class="material-icons-round moda_fav_icon">stars</span><p class="modal_sums">{{$favs}}</p></div></div>
                        <div class="modal_theme_cover"><p class="modal_theme">テーマ</p></div>
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
                                <div class="modal_date"></div>
                            </div>
                        </div>
                        <div class="modal_button_cover">
                            <div class="modal_button modal_lerease_btn"><span class="material-icons-round modal_lerease_icon">public</span><p class="modal_lerease_p">公開</p></div>
                            <div class="modal_button modal_play_btn"><span class="material-icons-round modal_play_icon">play_circle</span><p class="modal_play_p">あそぶ</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- releaseCheck.modal -->
        <div id="release_check_modal">
            <div class="release_check_modal_cover">
                <div class="release_top">
                    <p class="release_p">みんなにやることリストを公開しよう!!</p>
                </div>
                <div class="release_under">
                    <div class="release_check_area">
                        <div class="release_ok_area release_check_cover"><div class="release_ok_cover release_check_inner"><span class="material-icons-round release_ok_icon">public</span><p class="release_ok_p">公開</p></div><input class="check_ok check" type="radio" name="release_dete" value="1" ></div>
                        <div class="release_no_area release_check_cover"><div class="release_no_cover release_check_inner"><span class="material-icons-round release_no_icon">public_off</span><p class="release_no_p">非公開</p></div><input class="check_no check" type="radio" name="release_dete" value="0"></div>
                    </div>
                </div>
                <div class="release_comp"><p class="comp_p">適用</p></div>
            </div>
        </div>
    </form>
</main>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    const user = <?php print json_encode($user)?> ;
    const url = "{{route('color')}}";
    const img_url = "{{route('img')}}";
    const sort = "{{route('sort')}}";
</script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/pattern_change.js')}}"></script>
@endsection