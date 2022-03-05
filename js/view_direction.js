// リスト切り替え

const up_arrow = document.getElementsByClassName('up')[0];
const down_arrow = document.getElementsByClassName('down')[0];
const order = document.querySelectorAll('.order');
const first_order_val = document.getElementsByClassName('first_order_val')[0];
const second_order_val = document.getElementsByClassName('second_order_val')[0];
const active_order_val = document.getElementsByClassName('active_order_val')[0];
const unopen = document.getElementsByClassName('unopen')[0];
const first_number = document.getElementsByClassName('first_number')[0];
const second_number = document.getElementsByClassName('second_number')[0];
const active_number = document.getElementsByClassName('active_number')[0];

active_order_val.innerHTML = order[0].innerHTML;
active_number.innerHTML = 1;

up_arrow.addEventListener('click',function (event) {
    for(let i = 0; i < order.length; i++){
        if(active_order_val.innerHTML == order[i].innerHTML){
            if(active_order_val.innerHTML != order[0].innerHTML){
                active_order_val.innerHTML = '';
                active_number.innerHTML = '';
                active_number.innerHTML = i;
                active_order_val.innerHTML = order[i - 1].innerHTML;
                second_order_val.innerHTML = '';
                second_number.innerHTML = '';
                if(i != 1){
                    let insert_second_order_val = order[i - 2].innerHTML;
                    second_order_val.innerHTML = insert_second_order_val;
                    first_order_val.innerHTML = '';
                    second_number.innerHTML = i;
                    first_number.innerHTML = '';
                    second_number.innerHTML = i - 1;
                    if(i != 2){
                        let insert_first_order_val = order[i - 3].innerHTML;
                        first_order_val.innerHTML = insert_first_order_val;
                        first_number.innerHTML = i - 2;
                    }
                }
            }
            break;
        }
    }
    if(active_order_val.innerHTML == order[order.length - 1].innerHTML){
        unopen.style.display = 'none';
    }else{
        unopen.style.display = 'block';
    }
});
down_arrow.addEventListener('click',function (event) {
    for(let i = 0; i < order.length; i++){
        if(active_order_val.innerHTML == order[i].innerHTML){
            if(active_order_val.innerHTML != order[order.length - 1].innerHTML){
                second_order_val.innerHTML = '';
                second_order_val.innerHTML = order[i].innerHTML;
                second_number.innerHTML = '';
                second_number.innerHTML = i + 1;
                active_order_val.innerHTML = '';
                active_order_val.innerHTML = order[i + 1].innerHTML;
                active_number.innerHTML = '';
                active_number.innerHTML = i + 2;
                if(i != 0){
                    first_order_val.innerHTML = '';
                    first_order_val.innerHTML = order[i - 1].innerHTML;
                    first_number.innerHTML = '';
                    first_number.innerHTML = i;
                }
            }
            break;
        }
    }
    if(active_order_val.innerHTML == order[order.length - 1].innerHTML){
        unopen.style.display = 'none';
    }else{
        unopen.style.display = 'block';
    }
});

if(active_order_val.innerHTML == order[order.length - 1].innerHTML){
    unopen.style.display = 'none';
}else{
    unopen.style.display = 'block';
}

// modal（一覧）
const list_modal = document.getElementsByClassName('all_list')[0];
const view_home = document.getElementById('view_home');
const all_modal = document.getElementById('all_modal');
const back_button = document.getElementsByClassName('back_button')[0];
let flg = 0;

list_modal.addEventListener('click',function (event2) {
    view_home.style.display = 'none';
    all_modal.style.display = 'block';
    flg = 1;
});

back_button.addEventListener('click',function (event3) {
    if(flg == 1){
        view_home.style.display = 'block';
        all_modal.style.display = 'none';
        flg = 0;
    }else if(flg == 2){
        judge_modal.style.display = 'none';
        theme_cover.style.display = 'block';
        flg = 0;
    }else if(flg == 3){
        judge_modal.style.display = 'none';
        button_modal.style.display = 'none';
        theme_cover.style.display = 'block';
        flg = 0;
    }
});


// modal（結果）
const com_button = document.getElementsByClassName('com_button')[0];
const judge_modal = document.getElementById('judge_modal');
const button_modal = document.getElementById('button_modal');
const no_judge_button = document.getElementsByClassName('judge_button')[0];
const ok_judge_button = document.getElementsByClassName('judge_button')[1];
const theme_cover = document.getElementsByClassName('theme_cover')[0];

com_button.addEventListener('click',function () {
    judge_modal.style.display = 'block';
    theme_cover.style.display = 'none';
    flg = 2;
})

no_judge_button.addEventListener('click',function () {
    button_modal.style.display = 'block';
    flg = 3;
})
ok_judge_button.addEventListener('click',function () {
    button_modal.style.display = 'block';
    flg = 3;
})

