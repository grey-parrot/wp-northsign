<?php
/**
 * 無料ブランド勉強会LP：FAQ（ACF の値、空の場合は初期値。開閉なしで常に表示）
 */
?>
<section class="brand-study-faq brand-study-section">
  <div class="brand-study-inner">
    <div class="brand-study-heading">
      <h2 class="brand-study-heading__title">よくあるご質問</h2>
      <p class="brand-study-heading__en" lang="en">FAQ</p>
    </div>

    <dl class="brand-study-faq__list">
      <?php foreach ( $args['faqs'] as $faq ) : ?>
        <div class="brand-study-faq__item">
          <dt class="brand-study-faq__q"><?php echo esc_html( $faq['q'] ); ?></dt>
          <dd class="brand-study-faq__a"><?php echo nl2br( esc_html( $faq['a'] ) ); ?></dd>
        </div>
      <?php endforeach; ?>
    </dl>
  </div>
</section>
