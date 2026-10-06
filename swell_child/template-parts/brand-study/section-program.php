<?php
/**
 * 無料ブランド勉強会LP：勉強会の内容（Program）
 */
$steps = [
  [ 'img' => 'step-01', 'alt' => '角帽と本のアイコン', 'label' => 'ミニ勉強会', 'title' => 'ブランドの基本を知る', 'text' => 'ブランドとは何か、なぜ価格ではなく価値で選ばれるのか。事業にどう活かせるのかをお話しします。' ],
  [ 'img' => 'step-02', 'alt' => 'コンパスのアイコン', 'label' => '3C分析', 'title' => '強みと課題を整理する', 'text' => '顧客・競合・自社の3つの視点から、ワークシートを使って御社ならではの強みを整理し、ブランドの土台をつくります。' ],
  [ 'img' => 'step-03', 'alt' => '旗と的のアイコン', 'label' => 'アクション提案', 'title' => '次の一手を決める', 'text' => '3C分析の結果をもとに、今後の目標と、優先して取り組むことを一緒に考えます。' ],
];
$overview = [
  '所要時間' => '60分',
  '参加費'   => '無料',
  '対象'     => '経営者・事業責任者の方',
  '開催形式' => nl2br( esc_html( $args['format'] ) ),
  '講師'     => '北條 菜津子（ノースサイン合同会社 代表）',
];
$outcomes = [
  '「ブランドとは？」の基本の考え方',
  '3C分析でつくる、自社のブランドの土台',
  '今後の目標と、取り組む順番',
];
?>
<section class="brand-study-program brand-study-section">
  <div class="brand-study-inner">
    <div class="brand-study-heading">
      <h2 class="brand-study-heading__title">60分でお話しすること</h2>
      <p class="brand-study-heading__en" lang="en">Program</p>
    </div>

    <div class="brand-study-program__box">
      <div class="brand-study-program__intro">
        <p class="brand-study-program__intro-en" lang="en">Brand Study Session</p>
        <p class="brand-study-program__intro-title">ブランドの基本を知り、<br />自社の「選ばれる理由」を<br class="brand-study-only-sp" />見つける60分。</p>
        <p class="brand-study-program__intro-text">講義とワークを組み合わせて進めます。事前の資料準備は不要です。<br class="brand-study-only-pc" />3C分析は、ワークシートに御社のことを書き込みながら進めます。</p>
      </div>

      <ol class="brand-study-program__steps">
        <?php foreach ( $steps as $i => $step ) : ?>
          <li class="brand-study-program__step">
            <div class="brand-study-program__step-head">
              <img
                class="brand-study-program__step-icon"
                src="<?php echo esc_url( $args['img'] . '/' . $step['img'] ); ?>.webp"
                alt="<?php echo esc_attr( $step['alt'] ); ?>"
                width="72"
                height="72"
                loading="lazy"
              />
              <div class="brand-study-program__step-meta">
                <p class="brand-study-program__step-num" lang="en">STEP <?php echo esc_html( $i + 1 ); ?></p>
                <p class="brand-study-pill brand-study-pill--black brand-study-pill--small"><?php echo esc_html( $step['label'] ); ?></p>
              </div>
            </div>
            <h3 class="brand-study-program__step-title"><?php echo esc_html( $step['title'] ); ?></h3>
            <p class="brand-study-program__step-text"><?php echo esc_html( $step['text'] ); ?></p>
          </li>
        <?php endforeach; ?>
      </ol>

      <div class="brand-study-program__overview">
        <div class="brand-study-program__card brand-study-program__card--outline">
          <h3 class="brand-study-program__card-title">開催概要</h3>
          <dl class="brand-study-program__dl">
            <?php foreach ( $overview as $term => $desc ) : ?>
              <div class="brand-study-program__dl-row">
                <dt><?php echo esc_html( $term ); ?></dt>
                <dd><?php echo wp_kses( $desc, [ 'br' => [] ] ); ?></dd>
              </div>
            <?php endforeach; ?>
          </dl>
        </div>
        <div class="brand-study-program__card">
          <h3 class="brand-study-program__card-title">60分後に見えてくること</h3>
          <ul class="brand-study-program__outcomes">
            <?php foreach ( $outcomes as $outcome ) : ?>
              <li class="brand-study-check"><?php echo esc_html( $outcome ); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>

      <p class="brand-study-program__note">勉強会のあと、ご希望があれば具体的なお見積もり・ご提案をお出しします。こちらから押し売りすることはありません。</p>
    </div>
  </div>
</section>
