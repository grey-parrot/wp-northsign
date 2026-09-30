<?php
/**
 * 無料ブランド勉強会LP：参加の流れ（Flow）
 */
$flows = [
  [ 'title' => 'フォームから申し込む', 'text' => '会社のWebサイトや、いま感じていること、ご希望の日時をフォームにご記入ください。' ],
  [ 'title' => '日時の確定', 'text' => 'お申し込み内容を拝見し、日時確定のご連絡をお送りします。' ],
  [ 'title' => '60分の勉強会', 'text' => 'ブランドの基本と3C分析で、今の課題を一緒に整理します。' ],
  [ 'title' => 'ご提案', 'text' => 'ご希望の方には、具体的な進め方やお見積りをお出しします。' ],
];
?>
<section class="brand-study-flow brand-study-section">
  <div class="brand-study-inner">
    <div class="brand-study-heading">
      <h2 class="brand-study-heading__title">参加の流れ</h2>
      <p class="brand-study-heading__en" lang="en">Flow</p>
    </div>

    <ol class="brand-study-flow__list">
      <?php foreach ( $flows as $i => $flow ) : ?>
        <li class="brand-study-flow__item">
          <p class="brand-study-flow__num" aria-hidden="true"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></p>
          <div class="brand-study-flow__body">
            <h3 class="brand-study-flow__title"><?php echo esc_html( $flow['title'] ); ?></h3>
            <p class="brand-study-flow__text"><?php echo esc_html( $flow['text'] ); ?></p>
          </div>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</section>
