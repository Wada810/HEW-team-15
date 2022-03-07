buttonOpen.addEventListener('click',function(){
    var popup = document.getElementById('js-popup');
    if(!popup) return;
    popup.classList.add('is-show');

    function closePopUp(elem) {
      if(!elem) return;
      elem.addEventListener('click', function() {
        popup.classList.remove('is-show');
      })
    }
});