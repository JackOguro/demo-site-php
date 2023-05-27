window.onunload = function () {};
function sizecheck() {
  w = window.innerwidth ? window.innerWidth : $(window).width();
  h = window.innerHeight ? window.innerHeight : $(window).height();
}

sizecheck();
$(function () {
  if (w > 9999) {
} else {
  $('header .drawer').click(function () {
    $('body').toggleClass('nav-open');
    $('header nav').fadeToggle(200);
});
  $('header li a').click(function () {
    $('body').toggleClass('nav-open');
    $('header nav').fadeToggle(200);
  });
}
});