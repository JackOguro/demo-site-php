function fade(){
  // フェードアップ
  $('.fadeUpTrigger').each(function(){
    let scroll = $(window).scrollTop();
    let triTop = $(this).offset().top + 100;
    let winHeight = $(window).height();
    if (scroll >= triTop - winHeight){ 
      $(this).addClass('fadeUp');
    }else{
      $(this).removeClass('fadeUp');
    }
  });

  // フェードイン
  $('.fadeInTrigger').each(function(){
    let scroll = $(window).scrollTop();
    let triTop = $(this).offset().top + 100;
    let winHeight = $(window).height();
    if (scroll >= triTop - winHeight){ 
      $(this).addClass('fadeIn');
    }else{
      $(this).removeClass('fadeIn');
    }
  });

    // フェードレフト
  $('.fadeLeftTrigger').each(function(){
    let scroll = $(window).scrollTop();
    let triTop = $(this).offset().top + 100;
    let winHeight = $(window).height();
    if (scroll >= triTop - winHeight){
      $(this).addClass('fadeLeft');
    }else{
      $(this).removeClass('fadeLeft');
    }
  });

  // フェードライト
  $('.fadeRightTrigger').each(function(){
    let scroll = $(window).scrollTop();
    let triTop = $(this).offset().top + 100;
    let winHeight = $(window).height();
    if (scroll >= triTop - winHeight){
      $(this).addClass('fadeRight');
    }else{
      $(this).removeClass('fadeRight');
    }
  });
}

$(window).scroll(function () {
  fade();
});

// ターンアラウンド
function turnAround() {
   $('.turnRightTrigger').each(function () {
    let scroll = $(window).scrollTop();
    let triTop = $(this).offset().top + 90;
    let winHeight = $(window).height();
    if (scroll >= triTop - winHeight) {
      $(this).addClass('turnRight');
    } else {
      $(this).removeClass('turnRight');
    }
   });
  
  $('.turnLeftTrigger').each(function () {
    let scroll = $(window).scrollTop();
    let triTop = $(this).offset().top + 90;
    let winHeight = $(window).height();
    if (scroll >= triTop - winHeight) {
      $(this).addClass('turnLeft');
    } else {
      $(this).removeClass('turnLeft');
    }
  });
}

$(window).scroll(function () {
  turnAround();
});