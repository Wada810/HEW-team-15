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