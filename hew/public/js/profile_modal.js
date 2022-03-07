
const popup = document.getElementById('profile_modal');
var openBtn = document.querySelectorAll('.open-btn');

/* const closeBtn = document.getElementById('close-btn');
const blackBg = document.getElementById('black-bg'); */

for (let i = 0; i < openBtn.length; i++) {
    openBtn[i].addEventListener('click', function() {
        popup.classList.add('is-show');
        let user_id = document.getElementsByClassName('get_id')[i];
        let id = user_id.getAttribute('id');
        let inst_id = document.getElementsByClassName('friend_name')[i];
        let inst_get_id = inst_id.getAttribute('id');

        $.ajax({
          type: 'GET',
          url: friendProf_url,
          data: {
              'user_id': id,
              'inst_id': inst_get_id,
          },
          dataType: 'json',
        }).done((data)=>{
            $(document).on('click', openBtn , function () {
                $('.profile_area').remove();
            });
            $(document).on('click', openBtn , function () {
                $('#black-bg').remove();
            });
            console.log(data);
            let html = '';
          $.each(data, function (index, value) {
            let name = value.name;
            let stars = value.likes;
            let theme = value.theme;
            let lines = value.lines;
            let updated = value.updated_at;
            let updated_at = updated.substr(0 , 10);

            let inst_id = value.inst_id;

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

                        <form method="POST" action="{{ route('play/instraction')}}">
                        <input type="hidden" name="inst_id" value="${inst_id}">
                        <button type="submit" name="other_theme" value="play"><span class="material-icons-round">play_circle</span><span class="play">あそぶ</span></button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
        <div class="black-background" id="black-bg"></div>
        `
        })

        $('#profile_modal').append(html);

        const closeBtn = document.getElementById('close-btn');
        const blackBg = document.getElementById('black-bg');

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


