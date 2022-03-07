
//経験値バーの長さ
let max_length_exp = document.querySelector(".level_box").clientWidth;
let current_length_xp = (max_length_exp / user["next"]) * user["total_exp"];
document.querySelector(".animation-box").setAttribute("style",`width: ${current_length_xp}px;`);

//公開ラジオボタン
document.getElementById("public_button").addEventListener("click",()=>{
    document.getElementById("public_radio").checked = true;
    document.getElementsByClassName("radio_btn")[0].classList.add("radio_btn_active");
    document.getElementsByClassName("radio_btn")[1].classList.remove("radio_btn_active");
})
document.getElementById("unpublic_button").addEventListener("click",()=>{
    document.getElementById("unpublic_radio").checked = true;
    document.getElementsByClassName("radio_btn")[1].classList.add("radio_btn_active");
    document.getElementsByClassName("radio_btn")[0].classList.remove("radio_btn_active");
})

//レベルアップアニメーション
let level_modal = document.querySelector(".level_up_modal");
let level_box = document.querySelector(".level_up_window_box");
let level_window = document.querySelector(".level_up_window");
if(user["level_up"]){
    document.querySelector(".animation").addEventListener("animationend",()=>{
        level_modal.classList.remove("hidden");
        level_modal.classList.add("bg_fade_in");
        level_modal.addEventListener("animationend",()=>{
            let max_height = level_window.offsetHeight;
            console.log(max_height);
            level_box.style.maxHeight = `${max_height}px`;
            level_box.style.transform = `translateY(0)`;
        }),{once: true};

        //終了できるようにする
        console.log("s");
        document.getElementById("end_game_button").disabled = false;
    },{once: true})
}
document.querySelector(".animation").addEventListener("animationend",()=>{
    console.log("s");
    document.getElementById("end_game_button").disabled = false;
},{once: true})
//閉じる
document.querySelector(".close_level_up").addEventListener("click",()=>{
    level_modal.addEventListener("animationend",()=>{
        level_modal.classList.remove("bg_fade_in");
        level_modal.classList.remove("bg_fade_out");
        level_modal.classList.add("hidden");
    },{once: true})
    level_modal.classList.add("bg_fade_out");
});

let share = true;
if(share){
    document.querySelector(".animation").addEventListener("animationend",()=>{
        var popup = document.getElementById('rate_modal');
        if(!popup) return;
        popup.classList.remove('hidden');
        popup.classList.add('op');

        var closeBtn = document.getElementById('close-btn');
        // var blackBg = document.getElementById('black-bg');

        closePopUp(closeBtn);
        // closePopUp(blackBg);

        function closePopUp(elem) {
          if(!elem) return;
          elem.addEventListener('click', function() {
            popup.classList.remove('op');
            popup.classList.add('hidden');
          })
        }
    },{once: true})

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
            document.getElementById("like").checked = false;
        } else{
            document.getElementById("star_num").innerText = num;
            num--;
            document.getElementById("like").checked = true;
        }
    });
}