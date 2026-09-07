<?php
/**
 * SWELL子テーマ functions.php
 */

/**
 * 子テーマCSS
 */
add_action('wp_enqueue_scripts', function () {
  $css = get_stylesheet_directory() . '/style.css';
  if (file_exists($css)) {
    wp_enqueue_style(
      'child-style',
      get_stylesheet_directory_uri() . '/style.css',
      [],
      filemtime($css)
    );
  }
}, 20);

/**
 * 外部フォント・JS
 */
add_action('wp_enqueue_scripts', function () {

  // Google Fonts
  wp_enqueue_style(
    'lexend',
    'https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;500;600;700;900&display=swap',
    [],
    null
  );

  // YakuHanJP
  wp_enqueue_style(
      'yakuhanjp',
    'https://cdn.jsdelivr.net/npm/yakuhanjp@4.1.1/dist/css/yakuhanjp.min.css',
    [],
    '4.1.1'
  );

  // Custom JS
  $js = get_stylesheet_directory() . '/js/bundle.min.js';
  if (file_exists($js)) {
    wp_enqueue_script(
      'custom-bundle',
      get_stylesheet_directory_uri() . '/js/bundle.min.js',
      [],
      filemtime($js),
      true
    );
  }
});

/**
 * Contact Form 7 のCSS/JSを、フォームを使用するページ以外では読み込まない
 * （page-contact.php で do_shortcode() を直接使っているため、
 * 　CF7側の自動判定が効かず全ページで読み込まれてしまうのを防止）
 */
add_action('wp_enqueue_scripts', function () {
  if ( ! is_page('contact') ) {
    wp_dequeue_style('contact-form-7');
    wp_dequeue_script('contact-form-7');
    wp_dequeue_script('swv');
  }
}, 100);

/**
 * カスタム投稿タイプ登録
 */
add_action('init', function () {

  register_post_type('news-events', [
    'label'         => 'ニュース／イベント',
    'public'        => true,
    'has_archive'   => true,
    'menu_position' => 5,
    'supports'      => ['title', 'editor', 'thumbnail'],
    'show_in_rest'  => true,
    'rewrite'       => [
      'slug'       => 'news-events',
      'with_front' => false,
    ],
  ]);

  register_post_type('projects', [
    'label'         => '事例紹介',
    'public'        => true,
    'has_archive'   => true,
    'menu_position' => 6,
    'supports'      => ['title', 'editor', 'thumbnail'],
    'show_in_rest'  => true,
    'rewrite'       => [
      'slug'       => 'projects',
      'with_front' => false,
    ],
  ]);
});

add_filter('swell_is_show_sidebar', function ($show) {

    if ( is_singular(['news-events', 'projects']) ) {
        return false;
    }

    return $show;
});
