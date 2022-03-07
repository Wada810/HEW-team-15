window.setTimeout(function() {
  var popup = document.getElementById('js-popup');
  if(!popup) return;
  popup.classList.add('is-show');

  var closeBtn = document.getElementById('js-close-btn');
  var blackBg = document.getElementById('js-black-bg');

  closePopUp(closeBtn);
  closePopUp(blackBg);

  closeBtn.addEventListener('click', function() {
    console.log('ok2');
  });

  

  function closePopUp(elem) {
    if(!elem) return;
    elem.addEventListener('click', function() {
      console.log('ok');
      popup.classList.remove('is-show');
    })
  }
}, 2500);