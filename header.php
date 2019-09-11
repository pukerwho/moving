<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="yandex-verification" content="ba9434eced60a72a" />
  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <base href="/">
  <link rel="alternate" hreflang="x-default" href="<?php echo home_url(); ?>">
  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138524609-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-138524609-1');
    gtag('config', 'AW-747792319');
  </script>
  <!-- Event snippet for Кликнул в форме &quot;Рассчитать стоимость&quot; conversion page
  In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
  <script>
  function gtag_report_conversion(url) {
    var callback = function () {
      if (typeof(url) != 'undefined') {
        window.location = url;
      }
    };
    gtag('event', 'conversion', {
        'send_to': 'AW-747792319/yAKkCMjB5qoBEL_PyeQC',
        'event_callback': callback
    });
    return false;
  }
  </script>

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript" >
     (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
     m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
     (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

     ym(53722873, "init", {
          clickmap:true,
          trackLinks:true,
          accurateTrackBounce:true,
          webvisor:true
     });
  </script>
  <noscript><div><img src="https://mc.yandex.ru/watch/53722873" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
  <!-- /Yandex.Metrika counter -->
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <header id="header" class="header" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header__top d-flex align-items-center justify-content-between">
            <div class="header__logo">
              <a href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_url') ?>/img/moving-logo.png" width="275px" alt="">
              </a>
            </div>
            <div class="mobile-show">
              <div class="mobile-menu">
                <span></span>
                <span></span>
              </div>
              <div class="mobile-cover">
                <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                <li><span class="mobile-services">Услуги</span></li>
                <div class="mobile-services-list">
                  <li>
                    <a href="/poukraine">Грузы по Украине</a>
                  </li>
                  <li>
                    <a href="/world/">Международные перевозки</a>
                  </li>
                  <li>
                    <a href="/worldgo">Международные переезды</a>
                  </li>
                  <li>
                    <a href="/sposoby-dostavki">Способы перевозки</a>
                  </li>
                  <li>
                    <a href="/specperevozki">Специализированные перевозки</a>
                  </li>
                  <li>
                    <a href="/gruzchiki-upakovka">Грузчики, упаковка</a>
                  </li>
                </div>
                <li><a href="/articles">Статьи</a></li>
                <li><a href="/contact">Контакты</a></li>
              </div>
            </div>
            
            <div class="header__contact pc-show">
              <div class="d-flex">
                <div class="d-flex align-items-center mr-5">
                  <img src="<?php bloginfo('template_url') ?>/img/call-answer.svg" width="35px" alt="" class="mr-3">
                  <div class="mr-5">
                    <span class="font-weight-bold">Звоните:</span>
                    <br>
                    <a href="tel:+38 (097) 125-2-444">+38 (097) 125-2-444</a>
                  </div>
                  <div>
                    <a href="tel:+38 (066) 160-1-444">+38 (066) 160-1-444</a>
                    <br>
                    <a href="tel:+38 (063) 160-1-444">+38 (063) 160-1-444</a>
                  </div>
                </div>
                <div class="d-flex align-items-center">
                  <img src="<?php bloginfo('template_url') ?>/img/mail.svg" width="35px" alt="" class="mr-3">
                  <div>
                    <span class="font-weight-bold">Пишите:</span>
                    <br>
                    <a href="mailto:ua.worldmoving@gmail.com">ua.worldmoving@gmail.com</a>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="header__bottom d-flex justify-content-end py-3">
            <div class="header__menu">
              <nav class="head_menu">
                <ul>
                  <li>
                    <a href="<?php echo home_url(); ?>">Главная</a>
                  </li>
                  <li class="header__services">
                    <a href="#">Услуги</a>
                  </li>
                  <li>
                    <a href="/articles">Статьи</a>
                  </li>
                  <li>
                    <a href="/contact">Контакты</a>
                  </li>
                </ul>
              </nav>
              <!-- <?php wp_nav_menu([
                'theme_location' => 'head_menu',
                'container' => 'nav',
                'container_class' => 'head_menu',
                'menu_id' => 'ul_head_menu'
              ]); ?> -->
            </div>
          </div>
          <?php get_template_part('blocks/header/header__submenu') ?>
        </div>
      </div>
    </div>
  </header>
  <section id="content" role="main">