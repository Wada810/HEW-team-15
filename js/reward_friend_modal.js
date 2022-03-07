// const popup = document.getElementById('profile_modal');
// var openBtn = document.querySelectorAll('.open-btn');

// const closeBtn = document.getElementById('close-btn');
// const blackBg = document.getElementById('black-bg');

// for (let i = 0; i < openBtn.length; i++) {
//     openBtn[i].addEventListener('click', function() {
//         popup.classList.add('is-show');
//     });
// };
// closeBtn.addEventListener('click', function() {
//     popup.classList.remove('is-show');
// });
// blackBg.addEventListener('click', function() {
//     popup.classList.remove('is-show');
// });

window.setTimeout(function() {
    var popup = document.getElementById('rate_modal');
    if(!popup) return;
    popup.classList.add('is-show');

    var closeBtn = document.getElementById('close-btn');
    // var blackBg = document.getElementById('black-bg');

    closePopUp(closeBtn);
    // closePopUp(blackBg);

    function closePopUp(elem) {
      if(!elem) return;
      elem.addEventListener('click', function() {
        popup.classList.remove('is-show');
      })
    }
  }, 100);

// いいねボタン切り替え
let num = 1;
document.getElementById("star_num").innerText = num - 1;
const starBtnId = document.getElementById('starBtnId');
const star_btn = document.querySelector('.star_btn');
star_btn.addEventListener("click", function(){
    star_btn.classList.toggle('star_btn_active');
    const result = starBtnId.classList.contains('star_btn_active');
    if(!result){
        document.getElementById("star_num").innerText = num;
    	num++;
    } else{
        document.getElementById("star_num").innerText = num;
    	num--;
    }
});