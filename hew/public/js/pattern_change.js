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