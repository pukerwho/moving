$('.mobile-menu').on('click', function(e) {
  e.preventDefault;
  $(this).toggleClass('mobile-menu__active');
  $('.mobile-cover').toggleClass('mobile-cover__open');
});

$('.mobile-services').on('click', function(e) {
  $('.mobile-services-list').toggleClass('mobile-services-list-open');
  $('.mobile-services').css({'border-bottom':'2px solid #FFAE02'});
});

if ($(document).width() > 992) {
  $(window).scroll(function(){
    var h_scroll = $(this).scrollTop();
    if (h_scroll > 20) {
      $('header').addClass('header__fixed');
    } else {
      $('header').removeClass('header__fixed');
    }
  })
}

if ($(document).width() < 992) {
  $(window).scroll(function(){
    var h_scroll = $(this).scrollTop();
    if (h_scroll > 20) {
      $('header').addClass('header__mobile__fixed')
    } else {
      $('header').removeClass('header__mobile__fixed')
    }
  })
}

$('.counter').counterUp({
    delay: 10,
    time: 4000
});

var options = {
  stringsElement: '#typed-strings',
  typeSpeed: 40,
  backSpeed: 40,
  loop: true,
}

if ($('#typed').length > 0) {
  var typed = new Typed("#typed", options);
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
  $('header').css({'z-index':'1'});
});

$(document).on('click', '.modal-price__close', function(){
  console.log('click')
  $('.modal-price').hide();
  $('body').removeClass('modal-open');
  $('.modal-bg').removeClass('modal-bg__open');
  $('header').css({'z-index':'100'});
});  

//Биография
$(document).on('click', '.b_ukraine__button', function(){
  $('.b_ukraine__text-hidden').addClass('b_ukraine__text-show');
  $('.b_ukraine__button').hide();
})

//Video 
$(".b_video").mouseover(function(){
  $('.b_video>video').get(0).play();
});

$(".b_video").mouseleave(function(){
  $('.b_video>video').get(0).pause();
});

//Карта
if($('.b_ukraine__map'). length){
  $(window).scroll(function(event){
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    signTop = $('.b_ukraine__map').offset().top - $(window).height() + 5;
    console.log(scrollTop);
    console.log(signTop);
    if (scrollTop > signTop) {
      $('.b_ukraine__map').css({'display':'block'});
    }
  });
}