<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <base href="/">
  <link rel="alternate" hreflang="x-default" href="<?php echo home_url(); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo home_url(); ?>/en">
  <link rel="alternate" hreflang="ru" href="<?php echo home_url(); ?>/ru">
  <link rel="alternate" hreflang="ua" href="<?php echo home_url(); ?>/ua">
  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <header id="header" class="header py-3" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="header__top d-flex align-items-center justify-content-between">
            <div class="header__logo">
              <a href="<?php echo home_url(); ?>">
                <img src="<?php bloginfo('template_url') ?>/img/moving-logo.svg" width="200px" alt="">
              </a>
            </div>
            <div class="mobile-show">
              <div class="mobile-menu">
                <span></span>
                <span></span>
              </div>
              <div class="mobile-cover">
                <li><a href="#">Главная</a></li>
                <li><a href="#">Услуги</a></li>
                <li><a href="#">Статьи</a></li>
                <li><a href="#">Контакты</a></li>
              </div>
            </div>
            
            <div class="header__contact pc-show">
              <div class="d-flex align-items-center">
                <img src="<?php bloginfo('template_url') ?>/img/call-answer.svg" width="35px" alt="" class="mr-3">
                <div>
                  <span class="font-weight-bold">Звоните:</span>
                  <br>099-999-99-99
                </div>
              </div>
            </div>
          </div>
          <div class="header__bottom d-flex justify-content-end py-3">
            <div class="header__menu">
              <nav class="head_menu">
                <ul>
                  <li>
                    <a href="#">Главная</a>
                  </li>
                  <li class="header__services">
                    <a href="#">Услуги</a>
                  </li>
                  <li>
                    <a href="#">Статьи</a>
                  </li>
                  <li>
                    <a href="#">Контакты</a>
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
            <?php get_template_part('blocks/header/header__submenu') ?>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="content" role="main">