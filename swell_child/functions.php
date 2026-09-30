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


/**
 * 無料ブランド勉強会LP（page-brand-study.php）
 */
// LP専用CSSは、このページでのみ読み込む
add_action('wp_enqueue_scripts', function () {
  if ( ! is_page('brand-study') ) {
    return;
  }
  $css = get_stylesheet_directory() . '/assets/brand-study/brand-study.css';
  if (file_exists($css)) {
    wp_enqueue_style(
      'brand-study',
      get_stylesheet_directory_uri() . '/assets/brand-study/brand-study.css',
      ['child-style'],
      filemtime($css)
    );
  }
}, 30);

// ACF フィールドグループ（brand-study の固定ページにだけ表示）
add_action('acf/init', function () {
  $page = get_page_by_path('brand-study');
  if ( ! $page ) {
    return;
  }

  $fields = [
    [
      'key'          => 'field_brand_study_form_url',
      'label'        => 'GoogleフォームURL',
      'name'         => 'brand_study_form_url',
      'type'          => 'url',
      'default_value' => 'https://docs.google.com/forms/d/e/1FAIpQLSe_i62_69-pp88YWemk7WdTAX4OyMTqNxLgkIKb2gR193HFjQ/viewform',
      'instructions'  => '申込ボタン（ヘッダー・Hero・申込セクション・CTA）の遷移先。別タブで開きます。空の場合は初期のGoogleフォームを開きます。',
    ],
    [
      'key'           => 'field_brand_study_format',
      'label'         => '開催形式',
      'name'          => 'brand_study_format',
      'type'          => 'textarea',
      'rows'          => 3,
      'new_lines'     => '',
      'default_value' => "オンライン（Zoom）・少人数制\n各回 定員5社\n日時はフォームでお選びいただけます",
      'instructions'  => '「開催概要」の開催形式欄。改行はそのまま表示されます。',
    ],
  ];
  for ($i = 1; $i <= 3; $i++) {
    $fields[] = [
      'key'          => 'field_brand_study_case_url_' . $i,
      'label'        => '事例リンク' . $i,
      'name'         => 'brand_study_case_url_' . $i,
      'type'         => 'url',
      'instructions' => '「変わること」' . sprintf('%02d', $i) . 'の「事例を見る」の遷移先。空の場合はリンクを表示しません。',
    ];
  }
  $fields[] = [
    'key'          => 'field_brand_study_interview_url',
    'label'        => 'インタビューURL',
    'name'         => 'brand_study_interview_url',
    'type'         => 'url',
    'instructions' => 'お客様の声（PHOSLOOP様）の「インタビューを読む」の遷移先。空の場合はリンクを表示しません。',
  ];

  // FAQ：ACF Pro なら繰り返しフィールド、無料版なら質問1〜6／回答1〜6 の固定フィールド
  if (function_exists('acf_get_field_type') && acf_get_field_type('repeater')) {
    $fields[] = [
      'key'          => 'field_brand_study_faq',
      'label'        => 'FAQ',
      'name'         => 'brand_study_faq',
      'type'         => 'repeater',
      'layout'       => 'block',
      'button_label' => '質問を追加',
      'instructions' => '空の場合は初期の5件を表示します。',
      'sub_fields'   => [
        [
          'key'   => 'field_brand_study_faq_question',
          'label' => '質問',
          'name'  => 'question',
          'type'  => 'text',
        ],
        [
          'key'       => 'field_brand_study_faq_answer',
          'label'     => '回答',
          'name'      => 'answer',
          'type'      => 'textarea',
          'rows'      => 4,
          'new_lines' => '',
        ],
      ],
    ];
  } else {
    for ($i = 1; $i <= 6; $i++) {
      $fields[] = [
        'key'          => 'field_brand_study_faq_q' . $i,
        'label'        => 'FAQ 質問' . $i,
        'name'         => 'brand_study_faq_q' . $i,
        'type'         => 'text',
        'instructions' => $i === 1 ? '質問と回答の両方が入っている項目だけ表示します。すべて空の場合は初期の5件を表示します。' : '',
      ];
      $fields[] = [
        'key'       => 'field_brand_study_faq_a' . $i,
        'label'     => 'FAQ 回答' . $i,
        'name'      => 'brand_study_faq_a' . $i,
        'type'      => 'textarea',
        'rows'      => 3,
        'new_lines' => '',
      ];
    }
  }

  acf_add_local_field_group([
    'key'            => 'group_brand_study',
    'title'          => '無料ブランド勉強会LP',
    'fields'         => $fields,
    'location'       => [
      [
        [
          'param'    => 'page',
          'operator' => '==',
          'value'    => (string) $page->ID,
        ],
      ],
    ],
    'position'       => 'normal',
    'hide_on_screen' => ['the_content'],
  ]);
});
