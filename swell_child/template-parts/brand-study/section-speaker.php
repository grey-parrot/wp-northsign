<?php
/**
 * 無料ブランド勉強会LP：講師紹介（Speaker）
 */
$stats = [
  [ 'label' => '創業', 'value' => '12', 'text' => '年目（2014年〜）' ],
  [ 'label' => '受賞', 'value' => '2018', 'text' => 'グッドデザイン賞' ],
  [ 'label' => '資格', 'value' => 'Trainer', 'text' => 'ブランド・マネージャー<br class="brand-study-only-sp" />認定協会' ],
];
?>
<section class="brand-study-speaker brand-study-section">
  <div class="brand-study-inner">
    <div class="brand-study-heading">
      <h2 class="brand-study-heading__title">お話しするのは</h2>
      <p class="brand-study-heading__en" lang="en">Speaker</p>
    </div>

    <div class="brand-study-speaker__profile">
      <img
        class="brand-study-speaker__photo"
        src="<?php echo esc_url( $args['img'] ); ?>/speaker.webp"
        alt="講師 北條 菜津子の写真"
        width="357"
        height="452"
        loading="lazy"
      />
      <div class="brand-study-speaker__body">
        <div class="brand-study-speaker__name-wrap">
          <p class="brand-study-speaker__role">ノースサイン合同会社 代表／ブランド顧問デザイナー</p>
          <h3 class="brand-study-speaker__name">北條 菜津子<span class="brand-study-speaker__name-en" lang="en">Natsuko Hojo</span></h3>
        </div>
        <div class="brand-study-speaker__text">
          <p>東京藝術大学 絵画科油画専攻卒。Webデザイン・UI/UXの分野で20年以上、スタートアップや新規事業のブランドづくりに関わってきました。</p>
          <p>長くデザインの仕事を続けるなかで、「つくったものが顧客に選ばれなければ意味がない」と考えるようになり、ブランディングを学び直してトレーナー資格を取得。ものを作る前に、まずは戦略から一緒に考える、参謀のような存在でありたいと考えています。</p>
        </div>
        <dl class="brand-study-speaker__stats">
          <?php foreach ( $stats as $stat ) : ?>
            <div class="brand-study-speaker__stat">
              <dt class="brand-study-speaker__stat-label"><?php echo esc_html( $stat['label'] ); ?></dt>
              <dd class="brand-study-speaker__stat-value" lang="en"><?php echo esc_html( $stat['value'] ); ?></dd>
              <dd class="brand-study-speaker__stat-text"><?php echo wp_kses( $stat['text'], [ 'br' => [ 'class' => [] ] ] ); ?></dd>
            </div>
          <?php endforeach; ?>
        </dl>
      </div>
    </div>
  </div>
</section>
