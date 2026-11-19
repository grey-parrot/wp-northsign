<?php
/**
 * サービス概要（デザイン顧問＋制作メニュー＋講座・研修）
 * トップページの「私たちのサービス」と、サービスページ上部で共通。
 *
 * $args['heading'] … カードの見出しのタグ（既定は h3）
 */
$heading = ( isset( $args['heading'] ) && 'h2' === $args['heading'] ) ? 'h2' : 'h3';
$img_dir = get_stylesheet_directory_uri() . '/images/top';
?>
<div class="services-overview__body">
  <div class="services-overview__pillars">
    <div class="services-overview__pillar services-overview__pillar--advisory">
      <img
        class="services-overview__icon"
        src="<?php echo esc_url( $img_dir ); ?>/img-top-role-target.png"
        alt=""
        loading="lazy"
        decoding="async"
      />
      <div class="services-overview__pillar-txt">
        <p class="services-overview__pillar-label">ベース ｜ 月額の顧問契約</p>
        <<?php echo $heading; ?> class="hd-2xs">デザイン顧問</<?php echo $heading; ?>>
        <p class="tx-4xs">最初の3ヶ月でブランドの軸をつくり、その後も経営のそばで、何をつくるかを一緒に判断します。</p>
      </div>
    </div>
    <span class="services-overview__plus" aria-hidden="true">＋</span>
    <div class="services-overview__pillar">
      <img
        class="services-overview__icon"
        src="<?php echo esc_url( $img_dir ); ?>/img-top-service-design.png"
        alt=""
        loading="lazy"
        decoding="async"
      />
      <div class="services-overview__pillar-txt">
        <p class="services-overview__pillar-label">スポット ｜ 必要なときに都度</p>
        <<?php echo $heading; ?> class="hd-2xs">制作メニュー</<?php echo $heading; ?>>
        <p class="tx-4xs">Web・ロゴ・営業資料などを、必要なときに必要な分だけ。顧問契約がなくても、スポットでご依頼いただけます。</p>
      </div>
    </div>
  </div>
  <div class="services-overview__training">
    <img
      class="services-overview__training-icon"
      src="<?php echo esc_url( $img_dir ); ?>/img-top-service-education.png"
      alt=""
      loading="lazy"
      decoding="async"
    />
    <<?php echo $heading; ?> class="hd-2xs">＋ 講座・研修</<?php echo $heading; ?>>
    <p class="tx-4xs">社内にデザインの考え方を広げたい企業・組織には、研修・ワークショップもご用意しています。</p>
  </div>
</div>
