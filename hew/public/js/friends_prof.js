const close_btn = document.getElementsByClassName('modal_close')[0];
const modal = document.getElementById('release_modal');
const release_btn = document.getElementsByClassName('release_area');
const modal_name = document.getElementsByClassName('modal_name')[0];
const modal_theme = document.getElementsByClassName('modal_theme')[0];
const modal_lines = document.getElementsByClassName('modal_lines')[0];
const modal_star_sums = document.getElementsByClassName('modal_sums')[0];
const modal_rank = document.getElementsByClassName('modal_rank_sum')[0];
const modal_year = document.getElementsByClassName('modal_year')[0];
const modal_month = document.getElementsByClassName('modal_month')[0];
const modal_day = document.getElementsByClassName('modal_day')[0];


for(let i = 0; i < release_btn.length; i++) {
    release_btn[i].addEventListener('click',function (open_modal) {
        let set_theme = document.getElementsByClassName('todo_theme')[i];
        let set_lines = document.getElementsByClassName('lines')[i];
        let set_year = document.getElementsByClassName('year')[i];
        let set_month = document.getElementsByClassName('month')[i];
        let set_day = document.getElementsByClassName('day')[i];
        
        modal.style.display = 'block';
        modal_theme.innerHTML = set_theme.innerHTML;
        modal_lines.innerHTML = set_lines.innerHTML;
        modal_year.innerHTML = set_year.innerHTML;
        modal_month.innerHTML = set_month.innerHTML;
        modal_day.innerHTML = set_day.innerHTML;
    });
    
};

close_btn.addEventListener('click', function (close_modal) {
    modal.style.display = 'none';
});