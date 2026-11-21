<?php
/**
 * 料金プラン：外部CDOの枠（TOP・サービス共通）
 *
 * $args['class'] … 枠に足すクラス（余白など）
 */
$plan_option_class = isset( $args['class'] ) ? ' ' . $args['class'] : '';
?>
<div class="plan-option<?php echo esc_attr( $plan_option_class ); ?>">
  <div class="plan-option__head">
    <p class="plan-option__lead">より深く関わりたい企業へ</p>
    <h3 class="plan-option__title hd-xs">外部CDO</h3>
  </div>
  <p class="plan-option__price">料金は要相談</p>
  <p class="plan-option__txt">ブランドの設計と、ブランドを体現するための計画や戦略づくりを、一緒に進めるプランです。戦略パートナーの内容に加え、Web・UI・販促ツール・SNSなど各ブランド要素の改善支援・デザイン監修まで行います。</p>
  <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' ) ) ); ?>" class="plan-option__link more">お問い合わせ</a>
</div>
