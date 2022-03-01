// 複数処理のアコーディオン処理
const rep = document.querySelectorAll('.rep');

function toggle() {
    const content = this.nextElementSibling;
    this.classList.toggle("is-active");
    content.classList.toggle("is-open");
}

for (let i = 0; i < rep.length; i++) {
    rep[i].addEventListener("click", toggle);
}


// ○×処理
const judge = document.querySelectorAll('.judge');

const correct = document.querySelectorAll('.correct');
const incorrect = document.querySelectorAll('.incorrect');
const order = document.querySelectorAll('.order');

const unopen = document.getElementsByClassName('unopen')[0];
const set = order.length - 1;
const orderStyle = window.getComputedStyle(order[set]);

order[0].style.display = 'block';
judge[0].style.display = 'block';

for (let j = 0; j < order.length; j++) {
    correct[j].addEventListener("click", function (){
        if(orderStyle.getPropertyValue('display') == 'block'){
            unopen.style.display = 'none';
        }
        order[j].classList.toggle('corrected');
        order[j+1].style.display = 'block';
        for(let l = 0; l < order.length; l++){
            judge[l].style.display = 'none';
        }
        judge[j+1].style.display = 'block';
    });
    incorrect[j].addEventListener("click", function (){
        if(orderStyle.getPropertyValue('display') == 'block'){
            unopen.style.display = 'none';
        }
        order[j].classList.toggle('incorrected');
        order[j+1].style.display = 'block';
        for(let l = 0; l < order.length; l++){
            judge[l].style.display = 'none';
        }
        judge[j+1].style.display = 'block';
    });
    order[j].addEventListener("click", function () {
        for(let l = 0; l < order.length; l++){
            judge[l].style.display = 'none';
        }
        judge[j].style.display = 'block';
    })
}
