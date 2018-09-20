<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <div class="row j-center">
        <a href="https://techweb.press/">
          <figure class="logo">
            <img class="logo__img" src="https://techweb.press/wp-content/themes/tech-demo/assets/img/logo.png" alt="">
          </figure>
        </a>
      </div>

      <nav class="social__nav"><ul class="nav j-end"><li id="menu-item-22" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-22"><a href="https://www.facebook.com/techwebguatemala" class="nav-link nav__link b-red t-white t-hover-white b-hover-black"><span class="sr-text">Facebook</span></a></li>
    <li id="menu-item-23" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23"><a href="https://twitter.com/techwebgt" class="nav-link nav__link b-red t-white t-hover-white b-hover-black"><span class="sr-text">Twitter</span></a></li>
    </ul>
    <nav>
      <ul class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
      </ul>
    </nav>
    </header>
    <header>
      <h1><?php bloginfo('name'); ?></h1>
    </header>
