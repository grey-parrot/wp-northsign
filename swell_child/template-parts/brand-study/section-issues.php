<?php
/**
 * 無料ブランド勉強会LP：課題（Issues）＋ Bridge
 */
$issues = [
  [ 'img' => 'issue-01', 'alt' => '自社の良さが相手に伝わらず首をかしげる人のイラスト', 'text' => '自社のサービスの良さが、<br />お客様にうまく<br class="brand-study-only-pc" />伝わって<br class="brand-study-only-sp" />いない気がする' ],
  [ 'img' => 'issue-02', 'alt' => '似たような2つの商品が価格で比べられているイラスト', 'text' => '「他社と何が違うのか」を<br />うまく言葉にできず、<br />価格で比べられてしまう' ],
  [ 'img' => 'issue-03', 'alt' => '社長の話をメンバーがそれぞれ違う形で受け取っているイラスト', 'text' => '営業や発信が社長頼みで、<br />社内の誰もが同じように<br />価値を伝えられない' ],
  [ 'img' => 'issue-04', 'alt' => '何から手をつければいいか迷っている人のイラスト', 'text' => 'ブランドやデザインを<br />見直したいが、<br class="brand-study-only-pc" />何から<br class="brand-study-only-sp" />手をつければ<br class="brand-study-only-pc" />いいか<br class="brand-study-only-sp" />分からない' ],
];
?>
<section class="brand-study-issues brand-study-section">
  <div class="brand-study-inner">
    <div class="brand-study-heading">
      <h2 class="brand-study-heading__title">こんな課題は<br class="brand-study-only-sp" />ありませんか？</h2>
      <p class="brand-study-heading__en" lang="en">Issues</p>
    </div>
    <ul class="brand-study-issues__list">
      <?php foreach ( $issues as $issue ) : ?>
        <li class="brand-study-issues__item">
          <img
            class="brand-study-issues__img"
            src="<?php echo esc_url( $args['img'] . '/' . $issue['img'] ); ?>.webp"
            alt="<?php echo esc_attr( $issue['alt'] ); ?>"
            width="200"
            height="200"
            loading="lazy"
          />
          <p class="brand-study-issues__text"><?php echo wp_kses( $issue['text'], [ 'br' => [ 'class' => [] ] ] ); ?></p>
        </li>
      <?php endforeach; ?>
    </ul>

    <div class="brand-study-bridge">
      <span class="brand-study-bridge__arrow" aria-hidden="true"></span>
      <h3 class="brand-study-bridge__title">つくり直す前に、<br class="brand-study-only-sp" />まず「ブランドの軸」を。</h3>
      <p class="brand-study-bridge__text">見た目を整えるだけでは、選ばれる理由は生まれません。<br class="brand-study-only-pc" />「誰に、どんな価値を約束するのか」という軸が決まると、<br class="brand-study-only-pc" />Webサイトや営業資料、社内での伝え方まで、判断がそろっていきます。</p>
      <img
        class="brand-study-bridge__img"
        src="<?php echo esc_url( $args['img'] ); ?>/brand-axis.webp"
        alt="ブランドの軸を話し合う2人と、その軸がWebサイト・営業資料・社内の伝え方に広がっていく様子のイラスト"
        width="720"
        height="480"
        loading="lazy"
      />
    </div>
  </div>
</section>
