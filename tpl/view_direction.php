<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/view_direction.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <title>指示書確認</title>
</head>
<body>
    <header>
        <button class="back_button" type="button"><span class="material-icons-outlined">undo</span></button>
        <h1>指令を登録</h1>
    </header>
    <main>

        <div id="view_home">
            <div class="theme_cover"><p class="theme">ピーナッツバターサンドを作る！</p></div>
            <div class="view">
                <div class="sub_order_cover">
                    <div class="first_order sub_order"><p class="first_number"></p><p class="first_order_val sub_val"></p></div>
                    <div class="second_order sub_order"><p class="second_number"></p><p class="second_order_val sub_val"></p></div>
                </div>
                <p class="up button"><span class="material-icons-round">expand_less</span></p>
                <div class="active_order"><div class="active_cover"><p class="active_number number"></p><p class="active_order_val"></p></div></div>
                <p class="down button"><span class="material-icons-round">keyboard_arrow_down</span></p>
                <ul class="view_list">
                    <li class="order">パンを2まいとる</li>
                    <li class="order">バターナイフをとる</li>
                    <li class="order">ピーナッツバターをぬりぬりぬりぬりぬりぬりぬりぬりぬりぬりぬりぬり</li>
                    <li class="order">バターナイフをとる1</li>
                    <li class="order">バターナイフをとる2</li>
                    <li class="order">バターナイフをとる3</li>
                    <li class="order">バターナイフをとる4</li>
                </ul>
                <div class="sub_action">
                    <p class="unopen">・・・</p>
                    <p class="all_list">一覧を見る</p>
                </div>
                <button class="com_button" type="button">結果へ</button>
            </div>
        </div>

        <div id="all_modal">
            <div class="all_theme_cover"><p class="all_theme">ピーナッツバターサンドを作る！</p></div>
            <ul class="m_view_list">
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
                <li class="list_order">パンをにまいとる</li>
            </ul>
        </div>
        <div id="judge_modal">
            <p class="q_p">目標を達成できましたか？</p>
            <div class="judge_modal_cover">
                <div class="modal_theme_cover">
                    <p class="modal_theme_view">テーマ</p>
                    <p class="modal_theme">ピーナッツバターサンドを作る！</p>
                </div>
                <div class="judge_cover">
                    <div class="no_cover">
                        <p class="judge_button no">×</p>
                        <p class="no_p">失敗</p>
                    </div>
                    <div class="ok_cover">
                        <p class="judge_button ok">○</p>
                        <p class="ok_p">成功</p>
                    </div>
                </div>
            </div>
            <div id="button_modal">
                <div class="button_cover">
                    <button class="re_button com_button" type="button">やり直す</button>
                    <button class="end_button com_button" type="button">終了する</button>
                </div>
            </div>
        </div>
    </main>
    <script src="./js/view_direction.js"></script>
</body>
</html>