
const popup = document.getElementById('profile_modal');  
var openBtn = document.querySelectorAll('.open-btn');

const closeBtn = document.getElementById('close-btn');
const blackBg = document.getElementById('black-bg');

for (let i = 0; i < openBtn.length; i++) {
    openBtn[i].addEventListener('click', function() {
        popup.classList.add('is-show');
        const user_id = document.getElementsByClassName('get_id')[i];
        const id = user_id.getAttribute('id');
        $.ajax({
          type: 'GET',
          url: friendProf_url,
          data: {
              'user_id': id,
          },
          dataType: 'json',
        }).done((data)=>{
          console.log(data);
        }).fail(()=>{
        })
    });
};
closeBtn.addEventListener('click', function() {
    popup.classList.remove('is-show');
});
blackBg.addEventListener('click', function() {
    popup.classList.remove('is-show');
});

