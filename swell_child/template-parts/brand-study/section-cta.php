<?php
/**
 * 無料ブランド勉強会LP：CTA
 */
?>
<section class="brand-study-cta">
  <div class="brand-study-inner">
    <div class="brand-study-cta__box">
      <div class="brand-study-cta__main">
        <img
          class="brand-study-cta__img"
          src="<?php echo esc_url( $args['img'] ); ?>/cta.webp"
          alt="クリップボードを持つ講師のイラスト"
          width="119"
          height="144"
          loading="lazy"
        />
        <div class="brand-study-cta__text">
          <h2 class="brand-study-cta__title">まずは60分、<br class="brand-study-only-sp" />一緒に考える時間を<br />つくりませんか。</h2>
          <p class="brand-study-cta__info">所要時間 60分　／　参加費 無料<span class="brand-study-only-pc">　／　</span><br class="brand-study-only-sp" />オンライン（Zoom）<span class="brand-study-only-pc">　／　</span><br class="brand-study-only-sp" />経営者・事業責任者の方対象</p>
        </div>
      </div>
      <a <?php echo $args['entry_link']; ?> class="brand-study-button brand-study-button--cta">無料勉強会に申し込む</a>
    </div>
  </div>
</section>
