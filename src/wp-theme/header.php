<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta property="og:title" content="" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />

  <!-- functions.phpで後で読み込む -->
  <!-- google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <!-- css -->
  <<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="wp-content/themes/rinri/assets/css/style.css">
  <!-- js -->
  <script defer src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script defer src="wp-content/themes/rinri/assets/js/script.js"></script>
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a href="#" class="logo">
          <div class="logo__icon">
            <img src="wp-content/themes/rinri/assets/images/common/logo.svg" alt="Logo">
          </div>
          <div class="logo__title">新潟県倫理法人会</div>
        </a>
      </h1>
      <nav class="header__nav">
        <ul class="header__nav-items">
          <li class="header__nav-item">
            <a href="#"><span>はじめての方へ</span></a>
          </li>
          <li class="header__nav-item">
            <a href="#"><span>入会案内</span></a>
          </li>
          <li class="header__nav-item">
            <a href="#"><span>会員の方へ</span></a>
          </li>
          <li class="header__nav-item">
            <a href="#"><span>倫理法人会について</span></a>
          </li>
          <li class="header__nav-item header__nav-item--contact">
            <a href="#" target="_blank" rel="noopener">お問い合わせ</a>
          </li>
        </ul>
      </nav>
      <button class="header__hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="header__drawer js-drawer">
        <nav class="header__drawer-nav">
          <ul class="header__drawer-items">
            <li class="header__drawer-item">
              <a href="#"><span>はじめての方へ</span></a>
            </li>
            <li class="header__drawer-item">
              <a href="#"><span>入会案内</span></a>
            </li>
            <li class="header__drawer-item">
              <a href="#"><span>会員の方へ</span></a>
            </li>
            <li class="header__drawer-item">
              <a href="#"><span>倫理法人会につ</span>いて</a>
            </li>
            <li class="header__drawer-item header__drawer-item--contact">
              <a href="#" target="_blank" rel="noopener"><span>お問い合わせ</span></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>