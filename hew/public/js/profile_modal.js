
const popup = document.getElementById('profile_modal');
var openBtn = document.querySelectorAll('.open-btn');

/* const closeBtn = document.getElementById('close-btn'); */
const blackBg = document.getElementById('black-bg');

for (let i = 0; i < openBtn.length; i++) {
    openBtn[i].addEventListener('click', function() {
        popup.classList.add('is-show');
        const user_id = document.getElementsByClassName('get_id')[i];
        const id = user_id.getAttribute('id');
        $.ajax({
          type: 'GET',
          url: '/user/index/' + sort,
          data: {
              'user_id': id,
          },
          dataType: 'json',
        }).done((data)=>{
          console.log(data);
          let html = '';
          $.each(data, function (index, value) {
            let name = value.name;
            let stars = value.likes;
            let theme = value.theme;
            let lines = value.rows;
            let updated_at = value.updated_at;
        html = `
        <div class="profile_area">
            <div class="profile_wrap">
                <a class="profile_modal_top">
                    <div class="profile_rank_tag">
                        <div class="profile_rank_str">RANK</div>
                        <div class="profile_rank_int">1</div>
                    </div>
                    <div class="profile_img">
                        <img src="{{ asset('./img/kuma.png')}}" alt="">
                    </div>
                </a>
                <div class="close-btn" id="close-btn"><span class="material-icons-round">close</span></div>
                <div class="profile_modal_main">
                    <div class="profile_modal_info">
                        <h2>${name}</h2>
                        <div class="star_point_content">
                            <span class="material-icons-round">stars</span>
                            <p>${stars}</p>
                        </div>
                    </div>
                    <div class="profile_modal_todo">
                        <div class="profile_theme">${theme}</div>
                        <div class="profile_icon_container">
                            <div class="rows">
                                <span class="material-icons-round">format_list_numbered_rtl</span>
                                <p>x ${lines}</p>
                            </div>
                            <div class="date">
                                <span class="material-icons-round">calendar_today</span>
                                <p>${updated_at}</p>
                            </div>
                        </div>
                        <button type=""><span class="material-icons-round">play_circle</span><span class="play">あそぶ</span></button>
                    </div>
                </div>
            </div>
        </div>`
        })

        $('#profile_modal').append(html);

        const closeBtn = document.getElementById('close-btn');

        closeBtn.addEventListener('click', function() {
            popup.classList.remove('is-show');
        });
        blackBg.addEventListener('click', function() {
            popup.classList.remove('is-show');
        });

        }).fail(()=>{
            console.log('omg...');
        })
    });
};
/* closeBtn.addEventListener('click', function() {
    popup.classList.remove('is-show');
});
blackBg.addEventListener('click', function() {
    popup.classList.remove('is-show');
}); */

