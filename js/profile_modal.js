
const popup = document.getElementById('profile_modal');  
var openBtn = document.querySelectorAll('.open-btn');

const closeBtn = document.getElementById('close-btn');
const blackBg = document.getElementById('black-bg');

for (let i = 0; i < openBtn.length; i++) {
    openBtn[i].addEventListener('click', function() {
        popup.classList.add('is-show');
    });
};
closeBtn.addEventListener('click', function() {
    popup.classList.remove('is-show');
});
blackBg.addEventListener('click', function() {
    popup.classList.remove('is-show');
});
