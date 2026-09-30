<?php
/**
 * 無料ブランド勉強会LP：Hero
 * SP ではリード文をイラストの下へ移動する（CSS の order で並び替え）
 */
?>
<section class="brand-study-hero">
  <div class="brand-study-hero__inner brand-study-inner">
    <div class="brand-study-hero__copy">
      <p class="brand-study-hero__label">経営者・事業責任者のための　無料ブランド勉強会</p>
      <h1 class="brand-study-hero__title">その価格、下げずに<br />選ばれていますか？</h1>
      <p class="brand-study-hero__subtitle">ブランドの「今」を、<br class="brand-study-only-sp" />60分で一緒に見直しませんか。</p>
      <p class="brand-study-hero__lead">事業が動き出すと、目の前の仕事に追われて、ブランドやデザインの見直しは後回しになりがちです。「なんとなく気になっているけれど、手をつけられていない」ブランドの課題を、60分の無料勉強会で一緒に整理します。</p>
      <ul class="brand-study-hero__facts">
        <li class="brand-study-pill">所要時間 60分</li>
        <li class="brand-study-pill">参加費 無料</li>
        <li class="brand-study-pill">オンライン（Zoom）・少人数制</li>
      </ul>
      <div class="brand-study-hero__cta">
        <a <?php echo $args['entry_link']; ?> class="brand-study-button brand-study-button--hero">無料勉強会に申し込む</a>
        <p class="brand-study-hero__note">※ 制作のご提案から入ることはありません。<br class="brand-study-only-sp" />押し売りはいたしません。</p>
      </div>
    </div>
    <div class="brand-study-hero__illust">
      <img
        src="<?php echo esc_url( $args['img'] ); ?>/hero.webp"
        alt="ブランドの軸を示すボードを前に話し合う2人のイラスト"
        width="480"
        height="600"
        fetchpriority="high"
      />
    </div>
  </div>
</section>
