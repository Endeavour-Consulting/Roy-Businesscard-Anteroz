$(window).ready(function () {
  initWindowStore();
  mobileShare();
});

$(window).on('load', function () {
  $(".loader_inner").fadeOut('fast');
  $(".loader").delay(300).fadeOut('fast');
});

function mobileShare() {
  if (navigator.share !== undefined) {
    document.addEventListener('DOMContentLoaded', e => {
      var shareBtn = document.querySelector('#shareButton');
      $('#shareButton').show();
      shareBtn.addEventListener('click', clickEvent => {
        clickEvent.preventDefault();
        navigator.share({ title: document.title, text: window.location.href, url: window.location.href })
          .then(() => console.log('Successful share'),
            error => console.error('Error sharing:', error));
      });
    });
  } else {
    $('#shareButton').hide();
  }
}