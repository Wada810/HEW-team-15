let active = document.querySelector(".p_instraction_content_active");
let move_previous = document.getElementById("move_previous");
let move_next = document.getElementById("move_next");
let content = document.getElementsByClassName("p_instraction_content");
let dots = document.querySelector(".p_instraction__dots");
let comp_button = document.getElementById("comp_button");
//最初に１番目を入れる
move(0);
//移動ボタンにイベント設定
move_previous.addEventListener("click",()=>{
    let location = active.getAttribute("id");
    location --;
    move(location);
});
move_next.addEventListener("click",()=>{
    let location = active.getAttribute("id");
    location ++;
    move(location);
});
function move(location){
    active.setAttribute("id",location);
    active.innerHTML = `<span>${location + 1}.</span><p>${order_json[location]}</p>`;
    //ボタン制御
    //前にあるかチェック
    if(order_json[location - 1] != null){
        move_previous.classList.remove("invisible");
    }else{
        move_previous.classList.add("invisible");
    }
    //次にあるかチェック
    if(order_json[location + 1] != null){
        move_next.classList.remove("invisible");
        dots.classList.remove("invisible");
        comp_button.classList.add("invisible");
    }else{
        move_next.classList.add("invisible");
        dots.classList.add("invisible");
        comp_button.classList.remove("invisible");
    }
    //上の行制御
    if(order_json[location - 1] != null){
        content[1].innerHTML = `<span>${location}.</span><p>${order_json[location - 1]}</p>`;
        content[1].classList.add("filled");
    }else{
        content[1].innerHTML = ` `;
        content[1].classList.remove("filled");
    }
    if(order_json[location - 2] != null){
        content[0].innerHTML = `<span>${location - 1}.</span><p>${order_json[location - 2]}</p>`;
        content[0].classList.add("filled");
    }else{
        content[0].innerHTML = ` `;
        content[0].classList.remove("filled");
    }
}

//一覧を見る
//中身作成
let mian = document.getElementById("main");
let all_modal = document.querySelector(".p_instraction_all_list_modal");
let i = 0;
order_json.forEach(val => {
    let new_line = document.createElement("div");
    new_line.classList.add("p_instraction_content");
    new_line.classList.add("filled");
    new_line.innerHTML = `<span>${i + 1}.</span><p>${val}</p>`;

    //追加
    all_modal.appendChild(new_line);

    i ++;
});
document.querySelector(".p_instraction_all").addEventListener("click",()=>{
    main.classList.add("hidden");
    all_modal.classList.remove("hidden");
});