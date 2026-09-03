<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header-custom">
    <h1 class="header__logo">
      <a href="<?php echo esc_url( home_url() ); ?>/"
        ><img
          src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/logo.svg"
          alt="ノースサイン合同会社"
          width="190"
          height="36"
      /></a>
    </h1>
    <button
      id="hamburger"
      class="hamburger"
      aria-label="メニューを開く"
      aria-controls="gnav"
      aria-expanded="false"
    >
      <span class="hamburger__line" aria-hidden="true"></span>
    </button>
    <nav id="gnav" class="gnav" aria-label="メインメニュー">
      <ul class="gnav__list">
        <li class="gnav__item">
          <a href="<?php echo esc_url( get_permalink( get_page_by_path('about'))); ?>" class="gnav__link tx-3xs">私たちについて</a>
        </li>
        <li class="gnav__item">
          <a href="<?php echo esc_url( get_permalink( get_page_by_path('services'))); ?>" class="gnav__link tx-3xs">サービス</a>
        </li>
        <li class="gnav__item">
          <a href="<?php echo esc_url( get_post_type_archive_link('projects') ); ?>" class="gnav__link tx-3xs">事例紹介</a>
        </li>
        <li class="gnav__item">
          <a href="<?php echo esc_url( get_permalink( get_option('page_for_posts') ) ); ?>" class="gnav__link tx-3xs">ブログ</a>
        </li>
        <li class="gnav__item">
          <a href="<?php echo esc_url( get_permalink( get_page_by_path('contact'))); ?>" class="gnav__link tx-3xs button--header">相談する</a>
        </li>
      </ul>
    </nav>
  </header>