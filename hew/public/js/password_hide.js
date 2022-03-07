const hide_on_btn = document.getElementsByClassName('visibility_on_icon')[0];
const hide_off_btn = document.getElementsByClassName('visibility_off_icon')[0];


hide_on_btn.addEventListener('click',function () {
    document.getElementById('pass').setAttribute('type','text');
    hide_off_btn.style.display = 'block';
    hide_on_btn.style.display = 'none';
});

hide_off_btn.addEventListener('click',function () {
    document.getElementById('pass').setAttribute('type','password');
    hide_on_btn.style.display = 'block';
    hide_off_btn.style.display = 'none';
});


const name_now = document.getElementsByClassName('name_now')[0];
const pass_now = document.getElementsByClassName('pass_now')[0];
const name_length = document.getElementById('name');
const pass_length = document.getElementById('pass');


function StringCount (countTarget, resultTarget) {
    var len = document.getElementById(countTarget).value.length;
    document.getElementById(resultTarget).innerText = len;
}
