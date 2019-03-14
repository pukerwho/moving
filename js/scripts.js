$('.mobile-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('mobile-menu__active');
  $('.mobile-cover').toggleClass('mobile-cover__open');
});

$(window).scroll(function(){
  var h_scroll = $(this).scrollTop();
  if (h_scroll > 20) {
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

if ($('.typed').length > 0) {
  var typed = new Typed(".typed", options);
}

$('.header__services').mouseover(function() {
  $('.header__submenu').css({'display':'flex'});
});

$('.header__submenu').mouseleave(function() {
  $('.header__submenu').css({'display':'none'});
});

//Modal-price 
$(document).on('click', '.modal-price-btn', function(){
  $('.modal-price').show();
  $('body').addClass('modal-open');
  $('.modal-bg').addClass('modal-bg__open');
});

$(document).on('click', '.modal-price__close', function(){
  console.log('click')
  $('.modal-price').hide();
  $('body').removeClass('modal-open');
  $('.modal-bg').removeClass('modal-bg__open');
});  