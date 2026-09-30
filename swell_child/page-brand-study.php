<?php
/**
 * 無料ブランド勉強会LP（固定ページ スラッグ: brand-study）
 *
 * 固定ページ本文は使わず、文言はテンプレートに直接記述する。
 * 更新しそうな項目だけ ACF（functions.php で登録）から取得し、空の場合は初期値を使う。
 */

$brand_study_field = function ( $name ) {
  return function_exists( 'get_field' ) ? get_field( $name ) : null;
};

// 「無料勉強会に申し込む」ボタン（ヘッダー・Hero・CTA）は、ページ内の申込セクションへ移動させる
$entry_link = 'href="#entry"';

// Googleフォームへのリンクは申込セクションの「申込フォームへ進む」ボタンだけ（別タブで開く）
$form_url = $brand_study_field( 'brand_study_form_url' );
if ( ! $form_url ) {
  $form_url = 'https://docs.google.com/forms/d/e/1FAIpQLSe_i62_69-pp88YWemk7WdTAX4OyMTqNxLgkIKb2gR193HFjQ/viewform';
}
$form_link = sprintf( 'href="%s" target="_blank" rel="noopener"', esc_url( $form_url ) );

// 開催形式
$format = $brand_study_field( 'brand_study_format' );
if ( ! $format ) {
  $format = "オンライン（Zoom）・少人数制\n各回 定員5社\n日時はフォームでお選びいただけます";
}

// 事例リンク（3件）・インタビューURL（未設定のリンクは表示しない）
$case_urls = [];
for ( $i = 1; $i <= 3; $i++ ) {
  $case_urls[ $i ] = $brand_study_field( 'brand_study_case_url_' . $i );
}
$interview_url = $brand_study_field( 'brand_study_interview_url' );

// FAQ（ACF Pro の繰り返しフィールド → 無料版の固定フィールド → 初期値 の順に参照）
$faqs = [];
$faq_rows = $brand_study_field( 'brand_study_faq' );
if ( is_array( $faq_rows ) ) {
  foreach ( $faq_rows as $row ) {
    $faqs[] = [ 'q' => $row['question'] ?? '', 'a' => $row['answer'] ?? '' ];
  }
} else {
  for ( $i = 1; $i <= 6; $i++ ) {
    $faqs[] = [
      'q' => $brand_study_field( 'brand_study_faq_q' . $i ),
      'a' => $brand_study_field( 'brand_study_faq_a' . $i ),
    ];
  }
}
$faqs = array_values( array_filter( $faqs, function ( $faq ) {
  return $faq['q'] && $faq['a'];
} ) );
if ( ! $faqs ) {
  $faqs = [
    [ 'q' => '本当に無料ですか？ 売り込みはありませんか？', 'a' => 'はい、無料です。勉強会は現状をお聞きし、一緒に課題を整理する時間です。制作のご提案から入ることはありません。ご希望があった場合のみ、具体的なお見積り・ご提案をお出しします。' ],
    [ 'q' => 'まだ課題がはっきりしていなくても参加できますか？', 'a' => 'はい。「今の伝え方に違和感がある」「何から始めたらよいか分からない」といった段階からお話を伺います。' ],
    [ 'q' => 'どのような会社が対象ですか？', 'a' => 'スタートアップや新規事業を立ち上げる企業、中小〜成長期の企業の経営者・事業責任者の方を対象としています。IT・コンサルティング・医療・教育など、価値が伝わりにくい無形のサービスを扱う会社のご相談を多くいただいています。' ],
    [ 'q' => 'ほかの会社の方も一緒に参加しますか？', 'a' => 'はい。1回あたり最大5社の少人数制で開催します。ワークシートへの記入は各社で行い、ほかの参加者の前でお話しいただく内容はご自身でお選びいただけます。個別に詳しくご相談したい場合は、勉強会のあとにご案内します。' ],
    [ 'q' => '事前に準備するものはありますか？', 'a' => '特にありません。当日は、御社のWebサイトや営業資料を手元にご用意いただくと、ワークが進めやすくなります。' ],
  ];
}

$args = [
  'entry_link'    => $entry_link,
  'form_link'     => $form_link,
  'img'           => get_stylesheet_directory_uri() . '/assets/brand-study/img',
  'icon'          => get_stylesheet_directory_uri() . '/images',
  'format'        => $format,
  'case_urls'     => $case_urls,
  'interview_url' => $interview_url,
  'faqs'          => $faqs,
];
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php get_template_part( 'template-parts/brand-study/header', null, $args ); ?>

<!-- Main
====================================================================== -->
<main class="brand-study">
  <?php
  foreach ( [ 'hero', 'issues', 'benefits', 'program', 'speaker', 'flow', 'entry', 'faq', 'cta' ] as $section ) {
    get_template_part( 'template-parts/brand-study/section', $section, $args );
  }
  ?>

  <!-- PageTop
  ======================================== -->
  <?php get_template_part( 'pagetop' ); ?>
</main>

<?php get_footer( 'custom' ); ?>
