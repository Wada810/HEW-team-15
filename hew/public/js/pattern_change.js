// パターン変更
const buttonOpen = document.getElementById('modalOpen');
// アイコン変更
const buttonOpen2 = document.getElementById('modalOpenIcon');

// パターン
buttonOpen.addEventListener('click',function(){
    var popup = document.getElementById('js-popup');
    if(!popup) return;
    popup.classList.add('is-show');
    var closeBtn = document.getElementById('js-close-btn');
    var blackBg = document.getElementById('js-black-bg');

    closePopUp(closeBtn);
    closePopUp(blackBg);

    function closePopUp(elem) {
      if(!elem) return;
      elem.addEventListener('click', function() {
        popup.classList.remove('is-show');
      })
    }
});

// アイコン
buttonOpen2.addEventListener('click',function(){
    var popup = document.getElementById('js-popup-2');
    if(!popup) return;
    popup.classList.add('is-show');
    var closeBtn = document.getElementById('js-close-btn-2');
    var blackBg = document.getElementById('js-black-bg-2');
    closePopUp(closeBtn);
    closePopUp(blackBg);

    function closePopUp(elem) {
      if(!elem) return;
      elem.addEventListener('click', function() {
        popup.classList.remove('is-show');
      })
    }
});

// ボタンのDOM要素を取得
const icon_btn = document.getElementsByClassName('icon_btn');
for (let i = icon_btn.length - 1; i >= 0; i--) {
    icon_btn[i].addEventListener("click", function(){
        document.querySelector('.active_icon').classList.remove('active_icon');
        icon_btn[i].classList.add('active_icon');
    });
}

//経験値バーの長さ
let max_length_exp = document.querySelector(".level_box").clientWidth;
let current_length_xp = (max_length_exp / user["next"]) * user["total_exp"];
document.querySelector(".animation-box").setAttribute("style",`width: ${current_length_xp}px;`);


//変更を保存
let color_change_button = document.getElementsByClassName("color_change_button");
for(let i = 0; i < color_change_button.length; i ++){
  color_change_button[i].addEventListener("click",(e)=>{
    const theme = e.currentTarget.id;
    $.ajax({
      type: 'GET',
      url: url, //後述するweb.phpのURLと同じ形にする
      data: {
          'theme': theme, //ここはサーバーに贈りたい情報。今回は検索ファームのバリューを送りたい。
      },
      dataType: 'json', //json形式で受け取る
    }).done((data)=>{
      console.log(data);
      document.documentElement.setAttribute("theme",theme)
    }).fail(()=>{

    })
  })
}

//画像の変更
document.getElementById("js-close-btn-2").addEventListener("click",()=>{
  const path = document.querySelector(".active_icon").id;
  $.ajax({
    type: 'GET',
    url: img_url,
    data: {
        'path': path,
    },
    dataType: 'json',
  }).done((data)=>{
    console.log(data);
    document.querySelector(".prof_img").setAttribute("src",data);
  }).fail(()=>{
})
});

//ソート
const sort_seed = document.getElementsByClassName("sort_seed");
var select_state = document.querySelector("select[name=sort]");

select_state.addEventListener('change',function(){
  $.ajax({
    type: 'GET',
    url: sort,
    data: {
        'sort': select_state.value,
    },
    dataType: 'json', //json形式で受け取る
  }).done((data)=>{
    console.log(data);

    $.each(data, function (index, value) { //dataの中身からvalueを取り出す

    })
  }).fail(()=>{
    console.log('aaaa');
  })
});

/* for(let j = 0; j < sort_seed.length; j++){
  sort_seed[j].addEventListener("click", function(){
    const sort_value = sort_seed[j].getAttribute('value');
    console.log('aa');
    $.ajax({
      type: 'GET',
      url: sort_url,
      data: {
          'sort': sort_value,
      },
      dataType: 'json', //json形式で受け取る
    }).done((data)=>{
      console.log(data);

      $.each(data, function (index, value) { //dataの中身からvalueを取り出す

      })
    }).fail(()=>{
      document.log('aaaa');
    })
  })
} */

// modal処理
const close_btn = document.getElementsByClassName('modal_close')[0];
const modal = document.getElementById('release_modal');
const todo_list = document.getElementsByClassName('todo_list');
const modal_name = document.getElementsByClassName('modal_name')[0];
const modal_theme = document.getElementsByClassName('modal_theme')[0];
const modal_lines = document.getElementsByClassName('modal_lines')[0];
const modal_star_sums = document.getElementsByClassName('modal_sums')[0];
const modal_rank = document.getElementsByClassName('modal_rank_sum')[0];
const modal_date = document.getElementsByClassName('modal_date')[0];


for(let i = 0; i < todo_list.length; i++) {
    todo_list[i].addEventListener('click',function (open_modal) {
        let set_theme = document.getElementsByClassName('todo_theme')[i];
        let set_lines = document.getElementsByClassName('lines')[i];
        let set_date = document.getElementsByClassName('data')[i];

        modal.style.display = 'block';
        modal_theme.innerHTML = set_theme.innerHTML;
        modal_lines.innerHTML = set_lines.innerHTML;
        modal_date.innerHTML = set_date.innerHTML;
    });

};

close_btn.addEventListener('click', function (close_modal) {
    modal.style.display = 'none';
});



const release_btn = document.getElementsByClassName('modal_lerease_btn')[0];
const release_check_modal = document.getElementById('release_check_modal');
const close_check_btn = document.getElementsByClassName('release_comp')[0];

release_btn.addEventListener('click',function () {
    release_check_modal.style.display = 'flex';
});

close_check_btn.addEventListener('click',function () {
    release_check_modal.style.display = 'none';
});

