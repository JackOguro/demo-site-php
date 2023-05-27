const loadAnime = $('#splash');
const loadAnimebg = $('.splashbg');

$(function () {
  const webStorage = function () {
    if (sessionStorage.getItem('access')) {
      /*
        2回目以降アクセス時の処理
      */
      $('#splash').addClass('is-active');
      $('.splashbg').addClass('is-active');
      $('#container').addClass('is-active');
    } else {
      /*
        初回アクセス時の処理
      */
      sessionStorage.setItem('access', 'true'); // sessionStorageにデータを保存
      $(window).on('load', function () {
        $('#splash-logo').delay(1200).fadeOut('slow');
        $('#splash').delay(1500).fadeOut('slow', function () {
          $('body').addClass('appear');
        });
        $('.splashbg').on('animationend', function () {
        });
      });
    }
  }
  webStorage();
});