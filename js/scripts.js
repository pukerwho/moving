$('.toogle-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('toogle-menu_active');
  $('.slide-menu').toggleClass('slide-menu_active');
  $('.menu li').toggleClass('animate-left');
});

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 56) {
    $('header').addClass('header__fixed')
  } else {
    $('header').removeClass('header__fixed')
  }
})

$('.counter').counterUp({
    delay: 10,
    time: 4000
});

var options = {
  strings: ["Украине", "Европе", "Австралии"],
  typeSpeed: 40,
  backSpeed: 40,
  loop: true,
}

var typed = new Typed(".typed", options);

$('.header__services').mouseover(function() {
  $('.header__submenu').css({'display':'flex'});
});

$('.header__submenu').mouseleave(function() {
  $('.header__submenu').css({'display':'none'});
});